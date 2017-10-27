<?php

namespace App\Http\Controllers;

use App\Components\DocuSign\Client;
use App\Components\DocuSign\Template;
use App\Error;
use App\FuwMapping;
use Illuminate\Support\Facades\Mail;

class Document extends Controller
{
    private $envelopeId;

    /**
     * send template
     */
    public function send()
    {
        try {
            $client = new Client(
                config('docusign.username'),
                config('docusign.password'),
                config('docusign.integrator_key'));

//        $templateId = '4daf41b8-a7d9-4a97-8477-129bec38147b'; // my test template
            $templateId = '65a8d5ae-7620-4700-a538-92f96ddf0dc0'; // production template
            $template = $client->getTemplateInfo($templateId);

//        $sendData = [
//            'text' => ['myText' => 'test'],
//            'radio' => ['groupCountry' => 'us']
//        ];
            $sendData = FuwMapping::getMapping();

            $peoples = collect([
                [
                    'email' => 'ilyrium@yandex.com',
                    'name' => 'Anton Klochkov'
                ]
            ]);

            # global options envelopers
            $options = [
                'templateId' => $templateId,
                'subject' => 'Test new SDK'
            ];

            # send envelopers with dynamic data
            $response = $client->sendEnvelopesWithTemplate($options, function () use ($peoples, $template, $sendData) {
                return $peoples->map(function ($people) use ($template, $sendData) {
                    return [
                        'RoleName' => 'signer',
                        'name' => $people['name'],
                        'email' => $people['email'],
                        'tabs' => [
                            'textTabs' => $template->getTextTabsWithData($sendData['text']),
//                        'radioGroupTabs' => $template->getRadioGroupTabsWithData($sendData['radio'])
                        ]
                    ];
                })->toArray();
            });
            dd($response);

        } catch (\Exception $e) {
            # create log error to DB
            Error::create([
                'value' => $e->getMessage()
            ]);

            # send message to support
            Mail::send('email', [], function ($m) {
                $m->from('hello@app.com', 'Your Application');
                $m->to('myLyrium@gmail.com', $name = null)->subject('Error!');
            });
            dd($e);
        }
    }

    /**
     * send file with json
     */
    public function file()
    {
        try {
            $client = new Client(
                config('docusign.username'),
                config('docusign.password'),
                config('docusign.integrator_key'));

            # Get data with Json for send
            $sendData = FuwMapping::getMapping();

            $peoples = collect([
                [
                    'email' => 'ilyrium@yandex.com',
                    'name' => 'Anton Klochkov'
                ]
            ]);

            # send envelopers with dynamic data
            $response = $client->sendFile(function () use ($peoples, $sendData) {
                return $peoples->map(function ($people) use ($sendData) {
                    return [
                        'email' => $people['email'],
                        'name' => $people['name'],
                        'recipientId' => '1',
                        'clientUserId' => $people['email'],
                        'routingOrder' => '1',
                        'tabs' => [
                            'textTabs' => Template::fileTextTabs($sendData['text']),
                            'radioGroupTabs' => Template::fileRadioGroupTabs($sendData['radio']),
                            'checkboxTabs' => Template::fileCheckboxTabs($sendData['checkbox'])
                        ]
                    ];
                })->toArray();
            });
            $response = json_decode($response);
            $envelopeId = $response->envelopeId;

            # get the final url, without sending a letter to the mail
            $finalUrl = $client->getFinalUrl($envelopeId);
            dd($finalUrl);

        } catch (\Exception $e) {
            # create log error to DB
            Error::create([
                'value' => $e->getMessage()
            ]);

            # send message to support
            Mail::send('email', [], function ($m) {
                $m->from('hello@app.com', 'Your Application');
                $m->to('myLyrium@gmail.com', $name = null)->subject('Error!');
            });
            dd($e);
        }
    }

}
