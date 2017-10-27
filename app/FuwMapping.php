<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuwMapping extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fuw_mapping';

    protected $guarded = ['id'];

    public static function getMapping()
    {
        #get JSON
        $jsonData = Json::get();
        $jsonData = collect($jsonData)->map(function ($item) {
            return (array)$item;
        })->toArray();

        $textMappingCollection = self::where('type', '=', 'text')->get();
        $radioMappingCollection = self::where('type', '=', 'radio')->get();
        $checkboxMappingCollection = self::where('type', '=', 'checkbox')->get();

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
        foreach ($checkboxMappingCollection as $item) {
            $field = $item->json_field;
            $value = array_get($jsonData, $field);;
            $sendData['checkbox'][$item->pdf_field] = $value;
        }
        return $sendData;
    }
}
