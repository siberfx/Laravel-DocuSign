<?php

namespace App;

class Multiple
{

    public  function get($json, $path)
    {
        $result = $this->searchValueInArray(explode('.', $path), $json);
        return $result;
    }


    protected function searchValueInArray($items, $jsonArr)
    {
        $valuesArray = [];
        $itemsLeft = $items;
        foreach ($items as $key => $item) {

            unset($itemsLeft[$key]);

            $jsonArr = $this->getArrayValue($item, $jsonArr);
            if($jsonArr === false)
                continue;

            if ( is_array($jsonArr) and array_key_exists(1, $jsonArr) ) {
                foreach ($jsonArr as $jsonArrItem) {
                    $valuesArray2 = $this->searchValueInArray($itemsLeft, $jsonArrItem);
                    if (!empty($valuesArray2)) {
                        $valuesArray = array_merge($valuesArray, $valuesArray2);
                    }
                }
            } elseif (!is_array($jsonArr) and empty($itemsLeft)) {
                $valuesArray[] = $jsonArr;
            }
        }
        return $valuesArray;
    }


    protected function getArrayValue($val, $arr) {
        if (is_array($arr) and array_key_exists($val, $arr))
            return $arr[$val];
        else
            return false;
    }
}
