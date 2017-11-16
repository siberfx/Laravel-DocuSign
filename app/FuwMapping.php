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


    protected static function getMapping($files, $json)
    {
        $json = Rebuild::rebuild($json);

        $sendData = [];
        foreach ($files as $file) {
            $file = $file->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);

            $textMappingCollection = self::where('type', '=', 'text')->where('template', 'like', '%' . $filename . '%')->get();
            $radioMappingCollection = self::where('type', '=', 'radio')->where('template', 'like', '%' . $filename . '%')->get();
            $checkboxMappingCollection = self::where('type', '=', 'checkbox')->where('template', 'like', '%' . $filename . '%')->get();

            foreach ($textMappingCollection as $item) {
                $multiple = new Multiple();

                if ($item->options == 'multiple') {

                    $valueMultiple = $multiple->get($json, $item->json_field);
                    $i = 1;
                    foreach ($valueMultiple as $value) {
                        $sendData[$filename]['text']['main'][$item->pdf_field . $i] = $value;
                        $i++;
                    }

                } elseif ($item->options == 'multiple-date') {

                    $valueMultiple = $multiple->get($json, $item->json_field);

                    foreach ($valueMultiple as $value) {
                        $dates = explode(',', $item->pdf_field);
                        $dateValue = explode('/', $value);

                        foreach ($dates as $key => $date) {
                            if ($key == 0) {
                                $sendData[$filename]['text']['main'][$date] = date('M', $dateValue[$key]);
                            } else {
                                $sendData[$filename]['text']['main'][$date] = $dateValue[$key];
                            }
                        }
                    }

                } elseif ($item->options == 'multiple-collect') {
                    $jsonFields = explode(',', $item->json_field);
                    $multiple = new Multiple();

                    $valueMultiple = [];
                    foreach ($jsonFields as $field) {
                        $valueMultiple[] = $multiple->get($json, $field);
                    }

                    $collect = [];
                    foreach ($valueMultiple[0] as $key => $value) {
                        $string = '';
                        foreach ($valueMultiple as $data) {
                            $string .= ' ' . $data[$key] ?? '';
                        }
                        $collect[$key] = $string;
                    }

                    $i = 1;
                    foreach ($collect as $value) {
                        $sendData[$filename]['text']['collect'][$item->pdf_field . $i] = $value;
                        $i++;
                    }

                } else {
                    $field = $item->json_field;
                    $value = array_get($json, $field);

                    if ($item->options == 'date' and $value != null) {
                        $dates = explode(',', $item->pdf_field);
                        $dateValue = explode('/', $value);

                        foreach ($dates as $key => $date) {
                            if ($key == 0) {
                                $sendData[$filename]['text']['main'][$date] = date('M', $dateValue[$key]);
                            } else {
                                $sendData[$filename]['text']['main'][$date] = $dateValue[$key];
                            }
                        }
                    }

                    $sendData[$filename]['text']['main'][$item->pdf_field] = $value;
                }
            }

            foreach ($radioMappingCollection as $item) {
                if ($item->options == 'multiple' and $item->max_range_items == 2) {
                    $full = explode('.', $item->json_field);
                    $i = 1;
                    foreach ($json[$full[0]] as $key => $datum) {
                        $value = array_get($datum, $full[1]);
                        if (is_array($value))
                            $value = array_get($datum, $full[1] . '.' . $full[2]);
                        $sendData[$filename]['radio'][$item->pdf_field . $i] = $value;
                        $i++;
                    }
                } else {
                    $field = $item->json_field;
                    $value = array_get($json, $field);
                    if ($value === true) {
                        $value = 'Yes';
                    }
                    $sendData[$filename]['radio'][$item->pdf_field] = $value;
                }
            }

            foreach ($checkboxMappingCollection as $item) {
                if ($item->options == 'multiple' and $item->max_range_items == 2) {
                    $full = explode('.', $item->json_field);
                    $i = 1;
                    foreach ($json[$full[0]] as $key => $datum) {
                        $value = array_get($datum, $full[1]);
                        if (is_array($value))
                            $value = array_get($datum, $full[1] . '.' . $full[2]);
                        $sendData[$filename]['checkbox'][$item->pdf_field . $i] = $value;
                        $i++;
                    }
                } else {
                    $field = $item->json_field;
                    $value = array_get($json, $field);
                    if (is_array($value))
                        $value = $value[0]['selected'];
                    $sendData[$filename]['checkbox'][$item->pdf_field] = $value;
                }
            }
        }

//        dd($test);
        $sendData = self::control($sendData);

        return $sendData;
    }


    protected static function control($data)
    {
        foreach ($data as $key => $item) {
            if (empty($item['text']))
                $data[$key]['text'] = [];
            if (empty($item['radio']))
                $data[$key]['radio'] = [];
            if (empty($item['checkbox']))
                $data[$key]['checkbox'] = [];
        }
        return $data;
    }
}
