<?php

namespace App\Components\DocuSign;

use Illuminate\Support\Collection;

class Template extends Collection
{

    public function getTabs($key = false)
    {
        if (!$key)
            return (array)$this->items['recipients']->signers[0]->tabs;

        return (array)$this->items['recipients']->signers[0]->tabs->{$key};
    }


    public function getTextTabsWithData($data)
    {

        $tabs = $this->getTabs('textTabs');
//        dd((array)$tabs[0]);
        $tabs = collect($tabs)->map(function ($tab) use ($data) {
            $tab = (array)$tab;
            foreach ($data as $key => $replaceTab) {
                if ($key == $tab['tabLabel']) {
                    $tab['value'] = $replaceTab;
                    $tab['locked'] = true;
                }
            }
            return $tab;
        });
        return $tabs->toArray();
    }


    public function getRadioGroupTabsWithData($data)
    {
//        dd($data);
        $tabs = $this->getTabs('radioGroupTabs');
        $tabs = collect($tabs)->map(function ($tab) use ($data) {

            #convert to array
            $tab = (array)$tab;
            foreach ($tab['radios'] as $key => $radio) {
                $tab['radios'][$key] = (array)$radio;
            }

            foreach ($data as $key => $replaceTab) {

                if ($key == $tab['groupName']) {
                    foreach ($tab['radios'] as &$radio) {
                        if ($radio['value'] == $replaceTab and $radio['value'] != null) {
                            $radio['selected'] = 'True';
                            $radio['locked'] = 'True';
                        }
                    }
                }
            }
            return $tab;
        });
//        dd($tabs->toArray());
        return $tabs->toArray();
    }


    public function getCheckboxTabsWithData($data)
    {
        $tabs = $this->getTabs('checkboxTabs');
        dd($tabs, $data);
    }


    public static function fileTextTabs($data)
    {
        $tabsText = [];
        foreach ($data as $key => $value) {
            if($value != null) {
                $tabsText[] = [
                    'tabLabel' => $key,
                    'value' => $value,
                    'locked' => true,
                    'fontColor' => 'Purple',
                    'fontSize' => 'Size14',
                ];
            }
        }
        return $tabsText;
    }


    public static function fileRadioGroupTabs($data)
    {
        $tabRadio = [];
        foreach ($data as $key => $value) {
            if($value != null) {
                $tabRadio[] = [
                    'groupName' => $key,
                    'radios' => [
                        [
                            'value' => $value,
                            'selected' => true,
                            'locked' => true
                        ]
                    ]
                ];
            }
        }
        return $tabRadio;
    }


    public static function fileCheckboxTabs($data)
    {
        $checkbox = [];
        foreach ($data as $key => $value) {
            if($value != null) {
                $checkbox[] = [
                    "tabLabel" => $key,
                    "selected" => true,
                    "locked" => true
                ];
            }
        }
        return $checkbox;
    }
}