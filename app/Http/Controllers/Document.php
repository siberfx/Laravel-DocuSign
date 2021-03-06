<?php

namespace App\Http\Controllers;

use App\Components\DocuSign\Client;
use App\Error;
use App\FuwMapping;
use App\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mpdf\Mpdf;
use Mpdf\Output\Destination;

class Document extends Controller
{
    private $envelopeId;

    /**
     * send template
     */
    public function sendTemplate()
    {
//        try {
        $client = new Client(
            config('docusign.username'),
            config('docusign.password'),
            config('docusign.integrator_key')
        );


//             * test data
        $templateId = '4daf41b8-a7d9-4a97-8477-129bec38147b'; // my test template
        $sendData = [
            'text' => ['myText' => 'test'],
            'radio' => ['groupCountry' => 'us'],
            'checkbox' => ['check' => true]
        ];

//            $templateId = '65a8d5ae-7620-4700-a538-92f96ddf0dc0'; // production template
        $template = $client->getTemplateInfo($templateId);

//            $sendData = FuwMapping::getMapping();

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
                        'radioGroupTabs' => $template->getRadioGroupTabsWithData($sendData['radio']),
//                        'radioGroupTabs' => [
//                            ['groupName' => 'groupCountry',
//                                'radios' => [
//                                    ['value' => 'us', 'selected' => 'True', 'locked' => true],
//                                    ['value' => 'no', 'selected' => 'false', 'locked' => true]
//                                ]
//                            ]
//                        ],
                        'checkboxTabs' => [
                            [
                                "tabLabel" => "check",
                                "selected" => true,
                                "locked" => true,
                                "name" => "",
                                "shared" => "false",
                                "requireInitialOnSharedChange" => "false",
                                "required" => "false",
                                "documentId" => "34528174",
                                "recipientId" => "37686734",
                                "pageNumber" => "1",
                                "xPosition" => "330",
                                "yPosition" => "255",
                                "tabId" => "ca9418fc-8762-4009-b8b6-9954f97389ba",
                                "templateLocked" => "false",
                                "templateRequired" => "false",
                            ]
                        ]
                    ]
                ];
            })->toArray();
        });
        dd($response);

//        } catch (\Exception $e) {
//            $this->saveAndSendError($e);
//        }
    }

    /**
     * send file with json
     *
     * @param array $userData
     */
    public function sendFile(array $userData)
    {
//        try {
        $client = new Client(
            config('docusign.username'),
            config('docusign.password'),
            config('docusign.integrator_key')
        );

        # Get data with Json for send
        $sendData = FuwMapping::getMapping($userData['file'], $userData['json']);
//        dd($sendData);
        # send envelopers with dynamic data
        $response = $client->sendFile($userData, $sendData);

        $response = json_decode($response);
        $envelopeId = $response->envelopeId;

        # get the final url, without sending a letter to the mail
        $finalUrl = json_decode($client->getFinalUrl($envelopeId, $userData));

        return $finalUrl->url;

//        } catch (\Exception $e) {
//            $this->saveAndSendError($e);
//        }
    }


    public function create(Request $request)
    {
        $start = microtime(true);
        $userData = [
            'name' => $request->username,
            'email' => $request->email,
            'emailSubject' => $request->emailSubject,
            'file' => $request->file(),
            'json' => json_decode(Json::get(), true)
        ];
        $sendData = FuwMapping::getMapping($userData['file'], $userData['json']);

        $overflow = [];
        foreach ($sendData['overflow'] as $filename => $files){
            foreach ($files as $section => $tabs){
                foreach ($tabs as $field => $value) {
                    $number = substr($field, -1);
                    $overflow[$filename][$section][$number][] = $value;
                }
            }
        }

        $page = view('overflow', [
            'overflow' => $overflow
        ])->render();

        $mpdf = new Mpdf();
        $mpdf->WriteHTML($page);
        $sectionK = $mpdf->Output($page ,Destination::STRING_RETURN);
        $userData['pdf'] = $sectionK;

        $finalUrl = $this->sendFile($userData);

        $timeScript = round(microtime(true) - $start, 4);
        dd($finalUrl, $timeScript);
    }

    /**
     * save error to data base, and send to mail
     *
     * @param $e
     */
    public function saveAndSendError($e)
    {
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
