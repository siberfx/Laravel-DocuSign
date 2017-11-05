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


    protected static function getMapping($userData)
    {
        $json = $userData['json'];
        $file = $userData['file']['file']->getClientOriginalName();
        $filename = pathinfo($file, PATHINFO_FILENAME);

        #convert JSON
        $jsonData = self::convert($json);
//        dd($jsonData);

        $textMappingCollection = self::where('type', '=', 'text')->where('template', '=', $filename)->get();
        $radioMappingCollection = self::where('type', '=', 'radio')->where('template', '=', $filename)->get();
        $checkboxMappingCollection = self::where('type', '=', 'checkbox')->where('template', '=', $filename)->get();
        $sendData = [];

        foreach ($textMappingCollection as $item) {
            if ($item->options == 'multiple' and $item->max_range_items == 2) {
                $full = explode('.', $item->json_field);
                $i = 1;
                foreach ($jsonData[ $full[0] ] as $key => $datum) {
                    $value = array_get($datum, $full[1]);

                    if(is_array($value))
                        $value = array_get($datum, $full[1] . '.' . $full[2]);

                    $sendData['text'][$item->pdf_field . $i] = $value;
                    $i++;
                }
            } else {
                $field = $item->json_field;
                $value = array_get($jsonData, $field);

                if ($item->options == 'date' and $value != null) {
                    $dates = explode(',', $item->pdf_field);
                    $dateValue = explode('/', $value);

                    foreach ($dates as $key => $date) {
                        if($key == 0) {
                            $sendData['text'][$date] = date('M', $dateValue[$key]);
                        } else {
                            $sendData['text'][$date] = $dateValue[$key];
                        }
                    }
                }
                $sendData['text'][$item->pdf_field] = $value;
            }
        }

        foreach ($radioMappingCollection as $item) {
            if ($item->options == 'multiple' and $item->max_range_items == 2) {
                $full = explode('.', $item->json_field);
                $i = 1;
                foreach ($jsonData[ $full[0] ] as $key => $datum) {
                    $value = array_get($datum, $full[1]);
                    if(is_array($value))
                        $value = array_get($datum, $full[1] . '.' . $full[2]);
                    $sendData['radio'][$item->pdf_field . $i] = $value;
                    $i++;
                }
            } else {
                $field = $item->json_field;
                $value = array_get($jsonData, $field);
                $sendData['radio'][$item->pdf_field] = $value;
            }
        }

        foreach ($checkboxMappingCollection as $item) {
            if ($item->options == 'multiple' and $item->max_range_items == 2) {
                $full = explode('.', $item->json_field);
                $i = 1;
                foreach ($jsonData[ $full[0] ] as $key => $datum) {
                    $value = array_get($datum, $full[1]);
                    if(is_array($value))
                        $value = array_get($datum, $full[1] . '.' . $full[2]);
                    $sendData['checkbox'][$item->pdf_field . $i] = $value;
                    $i++;
                }
            } else {
                $field = $item->json_field;
                $value = array_get($jsonData, $field);
                if(is_array($value))
                    $value = $value[0]['selected'];
                $sendData['checkbox'][$item->pdf_field] = $value;
            }
        }

        return $sendData;
    }

    /**
     * recursive converting of nested objects to an array
     *
     * @param $data
     * @return array
     */
    public static function convert($data)
    {
        $data = get_object_vars($data);
        foreach ($data as $key => $item) {
            if (is_object($item)) {
                $data[$key] = self::convert($item);
            }
            if (is_array($item)) {
                foreach ($item as $twoKey => $arr) {
                    if (is_object($arr)) {
                        $data[$key][$twoKey] = self::convert($arr);
                    }
                }
            }
        }

        return $data;
    }
}
