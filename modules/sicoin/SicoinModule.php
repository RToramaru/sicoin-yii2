<?php

namespace app\modules\sicoin;

use Yii;
use yii\base\Theme;
use yii\base\Application;

/**
 * sicoin module definition class
 */
class SicoinModule extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\sicoin\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $this->initTheme();
        // custom initialization code goes here
    }

    private function initTheme(): void
    {
        Yii::$app->view->theme = new Theme([
            'pathMap' => ['@app/views' => '@yii2cmf/templates/adminlte/views'],
            'baseUrl' => '@web/templates/adminlte'
        ]);
    }
}
