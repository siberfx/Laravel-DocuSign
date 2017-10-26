<?php

namespace App\Http\Controllers;

use App\Components\DocuSign\Client;
use App\Components\DocuSign\Template;
use App\Error;
use App\FuwMapping;
use App\Json;
use Illuminate\Support\Facades\Mail;

class Document extends Controller
{
    public function send()
    {
//        try {
        $client = new Client(
            config('docusign.username'),
            config('docusign.password'),
            config('docusign.integrator_key'));

//        $templateId = '4daf41b8-a7d9-4a97-8477-129bec38147b';
        $templateId = '65a8d5ae-7620-4700-a538-92f96ddf0dc0'; // production
        $template = $client->getTemplateInfo($templateId);

        #get JSON
//        $jsonData = json_decode(file_get_contents('https://trello-attachments.s3.amazonaws.com/59e4b2d4398a6516a4beb856/59e4b4247fef39972bbb8fbd/e47951aa0330ab40e04a95467bc9ce86/all-v9-clean.json'));
        $jsonData = Json::get();
        $jsonData = collect($jsonData)->map(function ($item) {
            return (array)$item;
        })->toArray();

        #get data from DB
        $textMappingCollection = FuwMapping::where('json_field', 'like', 'insured.%')->
        where('type', '=', 'text')->get();
        $radioMappingCollection = FuwMapping::where('json_field', 'like', 'insured.%')->
        where('type', '=', 'radio')->get();
//            $checkboxMappingCollection = FuwMapping::where('json_field', 'like', 'insured.%')->
//                where('type', '=', 'checkbox')->get();

        $sendData = [
//            'text' => ['myText' => 'test'],
//            'radio' => ['groupCountry' => 'us']
        ];
            foreach ($textMappingCollection as $item) {
                $field = $item->json_field;
                $value = array_get($jsonData, $field);;
                $sendData['text'][$item->pdf_field] = $value;
            }
            foreach ($radioMappingCollection as $item) {
                $field = $item->json_field;
                $value = array_get($jsonData, $field);;
                $sendData['radio'][$item->pdf_field] = $value;
            }
//            foreach ($checkboxMappingCollection as $item) {
//                $field = $item->json_field;
//                $value = array_get($jsonData, $field);;
//                $sendData['checkbox'][$item->pdf_field] = $value;
//            }
//        unset($sendData['radio']['Life1_major_fin_prob']);
//        unset($sendData['radio']['Life1_pps']);
//        unset($sendData['radio']['Life1_genrisk_lifestyle_7']);
//        unset($sendData['radio']['Life1_occupation']);
//        unset($sendData['radio']['Life1_citizenship']);
//            dd($sendData);

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
                        'radioGroupTabs' => dd($template->getRadioGroupTabsWithData($sendData['radio']))
                    ]
                ];
            })->toArray();
        });
        dd($response);

//        } catch (\Exception $e) {
//            # create log error to DB
////            Error::create([
////                'value' => $e->getMessage()
////            ]);
////
////            Mail::send('email', [], function ($m) {
////                $m->from('hello@app.com', 'Your Application');
////                $m->to('myLyrium@gmail.com', $name = null)->subject('Error!');
////            });
//            dd($e);
//        }
    }

    public function file()
    {
        $client = new Client(
            config('docusign.username'),
            config('docusign.password'),
            config('docusign.integrator_key'));

        #get JSON
        $jsonData = json_decode(file_get_contents('https://trello-attachments.s3.amazonaws.com/59e4b2d4398a6516a4beb856/59e4b4247fef39972bbb8fbd/e47951aa0330ab40e04a95467bc9ce86/all-v9-clean.json'));
        $jsonData = collect($jsonData)->map(function ($item) {
            return (array)$item;
        })->toArray();

        #get data from DB
        $textMappingCollection = FuwMapping::where('json_field', 'like', 'insured.%')->
        where('type', '=', 'text')->get();
        $radioMappingCollection = FuwMapping::where('json_field', 'like', 'insured.%')->
        where('type', '=', 'radio')->get();

        $sendData = [];
        foreach ($textMappingCollection as $item) {
            $field = $item->json_field;
            $value = array_get($jsonData, $field);;
            $sendData['text'][$item->pdf_field] = $value;
        }
        foreach ($radioMappingCollection as $item) {
            $field = $item->json_field;
            $value = array_get($jsonData, $field);;
            $sendData['radio'][$item->pdf_field] = $value;
        }

        $peoples = collect([
            [
                'email' => 'ilyrium@yandex.com',
                'name' => 'Anton Klochkov'
            ]
        ]);

        # global options envelopers
        $options = [
            'email' => 'ilyrium@yandex.com',
            'name' => 'Anton Klochkov'
        ];

        # send envelopers with dynamic data
        $response = $client->sendEnvelopesWithFile($options, function () use ($peoples, $sendData) {
            return $peoples->map(function ($people) use ($sendData) {
                return [
//                    'RoleName' => 'as',
                    'email' => $people['email'],
                    'name' => $people['name'],
                    'recipientId' => '1',
                    'clientUserId' => $people['email'],
                    'routingOrder' => '1',
                    'tabs' => [
                        'textTabs' => Template::fileTextTabs($sendData['text']),
//                        'radioGroupTabs' => Template::fileRadioGroupTabs($sendData['radio'])
                    ]
                ];
            })->toArray();
        });
        dd($response, 1);
    }
}
