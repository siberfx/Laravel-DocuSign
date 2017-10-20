<?php

namespace App\Components\DocuSign;

use Illuminate\Support\Collection;

class Template extends Collection
{

    public function getTabs($key = false)
    {
        if(!$key)
            return (array)$this->items['recipients']->signers[0]->tabs;

        return (array)$this->items['recipients']->signers[0]->tabs->{$key};
    }


    public function getTextTabsWithData($data)
    {
        $tabs = $this->getTabs('textTabs');
        $tabs = collect($tabs)->map(function ($tab) use ($data) {
            $tab = (array) $tab;
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
}