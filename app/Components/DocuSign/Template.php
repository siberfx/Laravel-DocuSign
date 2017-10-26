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
        // checkboxTabs
    }


    public static function fileTextTabs($data)
    {
        $tabsText = [];
        foreach ($data as $key => $value) {
            $tabsText[] = [
                'tabLabel' => $key,
                'value' => $value,
                'locked' => true
            ];
        }
        return $tabsText;
    }


    public static function fileRadioGroupTabs($data)
    {
        $tabRadio = [];
        foreach ($data as $key => $value) {
            $tabRadio[] = [
                'groupName' => $key,
                'radios' => [
                    'value' => $value,
                    'selected' => true,
                    'locked' => true
                ]
            ];
        }
        return $tabRadio;
    }
}