<?php

namespace App\Http\Controllers;

use App\Components\DocuSign\Client;
use App\Error;
use App\FuwMapping;
use Illuminate\Support\Facades\Mail;

class Document extends Controller
{
    public function send()
    {
        try {
            $client = new Client(
                config('docusign.username'),
                config('docusign.password'),
                config('docusign.integrator_key'));

            $templateId = '65a8d5ae-7620-4700-a538-92f96ddf0dc0';
            $template = $client->getTemplateInfo($templateId);

            #get JSON
            $jsonData = json_decode(file_get_contents('https://trello-attachments.s3.amazonaws.com/59e4b2d4398a6516a4beb856/59e4b4247fef39972bbb8fbd/e47951aa0330ab40e04a95467bc9ce86/all-v9-clean.json'));
            $jsonData = collect($jsonData)->map(function ($item) {
                return (array)$item;
            })->toArray();

            #get data from DB
            $mappingCollection = FuwMapping::where('json_field', 'like', 'insured.%')->take(10)->get();

            $sendData = [];
            foreach ($mappingCollection as $item) {
                $field = $item->json_field;
                $value = array_get($jsonData, $field);;
                $sendData[$item->pdf_field] = $value;
            }

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
            $response = $client->sendEnvelopes($options, function () use ($peoples, $template, $sendData) {
                return $peoples->map(function ($people) use ($template, $sendData) {
                    return [
                        'RoleName' => 'as',
                        'name' => $people['name'],
                        'email' => $people['email'],
                        'tabs' => [
                            'textTabs' => $template->getTextTabsWithData($sendData)
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

            Mail::send('email', [], function ($m) {
                $m->from('hello@app.com', 'Your Application');
                $m->to('myLyrium@gmail.com', $name = null)->subject('Error!');
            });
            dd($e->getMessage());
        }
    }
}
