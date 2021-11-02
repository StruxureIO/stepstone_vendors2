<?php


namespace humhub\modules\stepstone_vendors\widgets;

use humhub\modules\content\widgets\stream\StreamEntryWidget;

class ContentInfoWallStreamEntryWidget extends StreamEntryWidget
{

    /**
     * @return string rendered wall entry body without the layoutRoot wrapper
     */
    protected function renderBody()
    {
        return $this->render('contentInfoWallStreamEntry', [
            'model' => $this->model
        ]);
    }
}