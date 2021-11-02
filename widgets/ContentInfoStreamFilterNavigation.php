<?php

namespace humhub\modules\stepstone_vendors\widgets;

use humhub\modules\ui\filter\widgets\FilterNavigation;

class ContentInfoStreamFilterNavigation extends FilterNavigation
{

    protected function initFilterPanels(){}

    protected function initFilterBlocks(){}

    protected function initFilters(){}

    /**
     * @inheritDoc
     */
    public function getAttributes()
    {
        return [
            'style' => 'padding-left:15px'
        ];
    }
}