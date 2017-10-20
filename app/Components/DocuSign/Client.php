<?php

namespace App\Components\DocuSign;

use \GuzzleHttp\Client as gClient;

class Client
{
    protected $userAgent = 'Mozilla / 5.0(Windows; U; Windows NT 5.1; en - US; rv: 1.9.0.1) Gecko / 2008070208 Firefox / 3.0.1';
    protected $headers = [
        'X-DocuSign-Authentication' => null,
    ];
    protected $client = null;
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


    public function sendEnvelopes(array $options, callable $recipients)
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
                'templateRoles' => $recipients()
            ]
        ];

        try {
            $request = $this->client->request('POST', $this->baseUrl . '/envelopes/', $options);
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