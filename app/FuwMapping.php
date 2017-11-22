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

            /**
             * create text tabs
             */
            foreach ($textMappingCollection as $item) {
                $multiple = new Multiple();

                if ($item->options == 'multiple' or $item->options == 'multiple-ssn') {

                    $valueMultiple = $multiple->get($json, $item->json_field);
                    $i = 1;
                    foreach ($valueMultiple as $value) {
                        #indent
                        if ($item->options == 'multiple-ssn') {
                            self::ssn($value);
                        }
                        # overflow value
                        if ($item->limit < $i and $item->limit != null) {
                            $section = str_replace(' ', '_', $item->section);
                            $document = str_replace(' ', '_', $item->filename);

                            $sendData['overflow'][$document][$section][$item->pdf_field . $i] = $value;
                        } else {
                            $sendData[$filename]['text']['main'][$item->pdf_field . $i] = $value;
                        }
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
                        # overflow value
                        if ($item->limit < $i and $item->limit != null) {
                            $section = str_replace(' ', '_', $item->section);
                            $document = str_replace(' ', '_', $item->filename);

                            $sendData['overflow'][$document][$section][$item->pdf_field . $i] = $value;
                        } else {
                            $sendData[$filename]['text']['collect'][$item->pdf_field . $i] = $value;
                        }
                        $i++;
                    }

                } else {
                    $field = $item->json_field;
                    $value = array_get($json, $field);

                    if ($item->options == 'date' and $value != null) {
                        $dates = explode(',', $item->pdf_field);
                        $dateValue = explode('/', $value);
                        #indent
                        $year = $dateValue[2];
                        $month = date('M', $dateValue[0]);
                        $dateValue[0] = '  ' . substr($month, 0, 1) . '   ' . substr($month, 1, 1) . '   ' . substr($month, -1);;
                        $dateValue[1] = ' ' . substr($dateValue[1], 0, 1) . '   ' . substr($dateValue[1], -1);
                        $dateValue[2] = ' ' . substr($year, 0, 1) . '   ' . substr($year, 1, 1) . '   ' . substr($year, 2, 1) . '  ' . substr($year, -1);

                        foreach ($dates as $key => $date) {
                            $sendData[$filename]['text']['main'][$date] = $dateValue[$key];
                        }
                    }
                    #indent
                    if ($item->options == 'ssn') {
                        self::ssn($value);
                    }

                    $sendData[$filename]['text']['main'][$item->pdf_field] = $value;
                }
            }

            /**
             * create radio tabs
             */
            foreach ($radioMappingCollection as $item) {
                if ($item->options == 'multiple') {
                    $full = explode('.', $item->json_field);
                    $i = 1;
                    if (isset($json[$full[0]][0])) {
                        foreach ($json[$full[0]] as $key => $datum) {
                            $value = array_get($datum, $full[1]);
                            if (is_array($value))
                                $value = array_get($datum, $full[1] . '.' . $full[2]);
                            $sendData[$filename]['radio'][$item->pdf_field . $i] = $value;
                            $i++;
                        }
                    } else {
                        foreach ($json[$full[0]][$full[1]] as $key => $datum) {
                            $value = array_get($datum, $full[2]);
                            if (is_array($value))
                                $value = array_get($datum, $full[1] . '.' . $full[2]);
                            $sendData[$filename]['radio'][$item->pdf_field . $i] = $value;
                            $i++;
                        }
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

            /**
             * create checkbox tabs
             */
            foreach ($checkboxMappingCollection as $item) {
                if ($item->options == 'multiple') {
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

        $sendData = self::control($sendData);
        return $sendData;
    }


    protected static function control($data)
    {
        foreach ($data as $key => $item) {
            if ($key == 'overflow')
                continue;
            if (empty($item['text']))
                $data[$key]['text'] = [];
            if (empty($item['radio']))
                $data[$key]['radio'] = [];
            if (empty($item['checkbox']))
                $data[$key]['checkbox'] = [];
        }
        return $data;
    }


    protected static function ssn($value)
    {
        $value = ' ' . substr($value, 0, 1) . '   ' . substr($value, 1, 1) . '   ' . substr($value, 2, 3) . '  ' . substr($value, 5, 2)
            . substr($value, 7, 1) . '  ' . substr($value, 8, 1) . '   ' . substr($value, 9, 1) . '   ' . substr($value, -1);
        $value = str_replace('-', '    ', $value);
        return $value;
    }
}
