<?php

namespace App\Components\DocuSign;

use Guzzle\Plugin\History\HistoryPlugin;
use GuzzleHttp\Client as gClient;

class Client
{
    protected $userAgent = 'Mozilla / 5.0(Windows; U; Windows NT 5.1; en - US; rv: 1.9.0.1) Gecko / 2008070208 Firefox / 3.0.1';
    protected $headers = [
        'X-DocuSign-Authentication' => null,
    ];
    protected $client = null;
    protected $history = null;
    protected $baseUrl = null;

    /* Consts urls */
    const BASE_URL_FETCH = 'https://demo.docusign.net/restapi/v2/login_information';

    public function __construct($username, $password, $integratorKey)
    {
        $this->client = new gClient();

        $this->headers['X-DocuSign-Authentication'] = json_encode([
            'Username' => $username,
            'Password' => $password,
            'IntegratorKey' => $integratorKey,
        ]);
        $this->baseUrl = $this->getBaseUrl();
    }


    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param $templateId
     * @return Template
     */
    public function getTemplateInfo($templateId)
    {
        $request = $this->client->request('GET', $this->baseUrl . "/templates/{$templateId}", [
            'headers' => $this->getHeaders(),
        ]);
        $templateInfo = json_decode($request->getBody()->getContents());
        return new Template($templateInfo);
    }

    /**
     * send template
     *
     * @param array $options
     * @param callable $recipients
     * @return string
     * @throws \Exception
     */
    public function sendEnvelopesWithTemplate(array $options, callable $recipients)
    {
        if (!isset($options['templateId']))
            throw new \Exception('$options[\'templateId\'] required');

        $options = [
            'headers' => [
                'X-DocuSign-Authentication' => $this->headers['X-DocuSign-Authentication'],
                'headers' => [
                    "X-DocuSign-SDK" => "PHP",
                    'Accept' => 'application/json',
                    'User-Agent' => $this->userAgent,
                    'Content-Type' => 'application/json; charset=utf-8',
                ]
            ],
            'json' => [
                'status' => 'sent',
                'emailSubject' => $options['subject'] ?? 'Example Template attach data',
                'templateId' => $options['templateId'],
                'templateRoles' => $recipients(),
            ]
        ];

        try {
            $request = $this->client->request('POST', $this->baseUrl . '/envelopes/', $options);
            return $request->getBody()->getContents();
        } catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * send file
     *
     * @param array $userData
     * @param array $sendData
     * @return string
     */
    public function sendFile(array $userData, array $sendData)
    {
        $compositeTemplates = [];
        $file_data_string = "";
        $id = 1;

        foreach ($userData['file'] as $file) {
            $stream = file_get_contents($file);
            $filename = $file->getClientOriginalName();
            $withoutExtension = pathinfo($filename, PATHINFO_FILENAME);

            $file_data_string .= "--myboundary\r\n"
                . "Content-Type:application/pdf\r\n"
                . "Content-Disposition: file; filename=\"$filename\"; documentid=$id \r\n"
                . "\r\n"
                . "$stream\r\n";

            $compositeTemplates[] = [
                'inlineTemplates' => [
                    [
                        'sequence' => '1',
                        'recipients' => [
                            'signers' => [
                                [
                                    'email' => $userData['email'],
                                    'name' => $userData['name'],
                                    'recipientId' => '1',
                                    'clientUserId' => $userData['email'],
                                    'routingOrder' => '1',
                                    'tabs' => [
                                        'textTabs' => Template::fileTextTabs($sendData[$withoutExtension]['text']),
                                        'radioGroupTabs' => Template::fileRadioGroupTabs($sendData[$withoutExtension]['radio']),
                                        'checkboxTabs' => Template::fileCheckboxTabs($sendData[$withoutExtension]['checkbox'])
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'document' => [
                    'documentId' => $id,
                    'name' => $filename,
                    'transformPdfFields' => 'true'
                ]
            ];
            $id++;
        }

        $overflow = $userData['pdf'];
        $file_data_string .= "--myboundary\r\n"
            . "Content-Type:application/pdf\r\n"
            . "Content-Disposition: file; filename=\"overflow.pdf\"; documentid=$id \r\n"
            . "\r\n"
            . "$overflow\r\n";

        $compositeTemplates[] = [
            'inlineTemplates' => [
                [
                    'sequence' => '1',
                    'recipients' => [
                        'signers' => [
                            [
                                'email' => $userData['email'],
                                'name' => $userData['name'],
                                'recipientId' => '1',
                                'clientUserId' => $userData['email'],
                                'routingOrder' => '1',
                                'tabs' => [
                                    "textTabs" => [],
                                    "radioGroupTabs" => [],
                                    "checkboxTabs" => []
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'document' => [
                'documentId' => $id,
                'name' => 'overflow.pdf'
//                'transformPdfFields' => 'true'
            ]
        ];
//        dd($file_data_string);
//        dd($compositeTemplates);

        $json = json_encode([
            'status' => 'sent',
            'emailSubject' => $userData['emailSubject'],
            'compositeTemplates' => $compositeTemplates]);

        $data_string = "\r\n"
            . "\r\n"
            . "--myboundary\r\n"
            . "Content-Type: application/json\r\n"
            . "Content-Disposition: form-data\r\n"
            . "\r\n"
            . "$json\r\n"
            . $file_data_string
            . "--myboundary--\r\n"
            . "\r\n";

        $body = [
//            'debug' => true,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'multipart/form-data;boundary=myboundary',
                'Content-Length' => strlen($data_string),
                'X-DocuSign-Authentication' => $this->headers['X-DocuSign-Authentication']
            ],
            'body' => $data_string
        ];

        $request = $this->client->request('POST', $this->baseUrl . '/envelopes/', $body);
        return $request->getBody()->getContents();
    }

    /**
     * get final link to DocuSign documents
     *
     * @param $envelopeId
     * @param array $userData
     * @return string
     */
    public function getFinalUrl($envelopeId, array $userData)
    {
        $data = json_encode([
            "userName" => $userData['name'],
            "email" => $userData['email'],
            "recipientId" => "1",
            "clientUserId" => $userData['email'],
            "authenticationMethod" => "email",
            "returnUrl" => "https://www.docusign.com/devcenter/?viewing_complete=read-only"
        ]);

        $body = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Content-Length' => strlen($data),
                'X-DocuSign-Authentication' => $this->headers['X-DocuSign-Authentication']
            ],
            'body' => $data
        ];

        $request = $this->client->request('POST', $this->baseUrl . '/envelopes/' . $envelopeId . '/views/recipient/', $body);
        return $request->getBody()->getContents();
    }


    protected function getBaseUrl()
    {
        $req = $this->client->request('GET', self::BASE_URL_FETCH, [
            'headers' => $this->getHeaders(),
        ]);
        $payload = json_decode($req->getBody()->getContents());
        return $payload->loginAccounts[0]->baseUrl;
    }

}