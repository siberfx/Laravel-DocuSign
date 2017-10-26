<?php

namespace App\Components\DocuSign;

use Guzzle\Plugin\History\HistoryPlugin;
use GuzzleHttp\Client as gClient;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\MultipartStream;

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
        $this->history = new HistoryPlugin();
//        $this->history->setLimit(5);
//        $this->client->addSubscriber($this->history);

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

    public function sendEnvelopesWithFile(array $options, callable $recipients)
    {
//        if (!isset($options['templateId']))
//            throw new \Exception('$options[\'templateId\'] required');
        $stream = fopen(__DIR__ . '/../../../public/pdf/template.pdf', 'r');
        $boundary = uniqid('12345');

        $options = [
            'debug' => true,
            'headers' => [
                'X-DocuSign-Authentication' => $this->headers['X-DocuSign-Authentication'],
                'headers' => [
                    "X-DocuSign-SDK" => "PHP",
                    'User-Agent' => $this->userAgent,
                    'Content-Type' => 'application/json',
                    'Content-Disposition' => 'form-data;',
                ]
            ],
            'body' => new MultipartStream([
//            'multipart' => [
//                [
//                    'name'     => 'template.pdf',
//                    'contents' => $stream
//                ],
//                [
//                    'name'     => 'csv_header',
//                    'contents' => 'First Name, Last Name, Username',
//                    'filename' => 'csv_header.csv'
//                ]
                [
                    'name' => 'file',
                    'contents' => $stream,
                    'filename' => 'template.pdf',
                    'headers' => [
                        'Content-Type' => 'application/pdf',
                        'Content-Disposition' => 'file; filename="template.pdf"; documentid=1',
                    ]

                ]
            ], $boundary),
            'json' => [
                'status' => 'sent',
                'emailSubject' => 'subject',
                'compositeTemplates' => [
                    [
                        'inlineTemplates' => [
                            [
                                'sequence' => '1',
                                'recipients' => [
                                    'signers' => $recipients()
                                ]
                            ]
                        ],
                        'document' => [
                            'documentId' => '1',
                            'name' => 'template.pdf',
                            'transformPdfFields' => 'true'
                        ]
                    ],
                ]
            ]
        ];
//        dd($options);

        try {
            $request = $this->client->request('POST', $this->baseUrl . '/envelopes/', $options);
//            dd($this->history);
            return $request->getBody()->getContents();
        } catch (\Exception $e) {
            dd($e);
        }
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