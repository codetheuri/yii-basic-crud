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

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
    $this->layout = 'Blayout';
    
        // custom initialization code goes here
    }
}
