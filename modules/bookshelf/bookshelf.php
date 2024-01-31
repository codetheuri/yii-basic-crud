<?php

namespace app\modules\bookshelf;

/**
 * bookshelf module definition class
 */
class bookshelf extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\bookshelf\controllers';
    public $layout = 'Blayout';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
