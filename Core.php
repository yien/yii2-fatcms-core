<?php
namespace fatcms\core;

use yii\base\Component;

class Core extends Component
{
    /**
     * Version Number
     */
    const VERSION = "0.0.1";




    public function init()
    {
        parent::init();
//        if (app()->id != "console") {
//            \Yii::$app->i18n->translations['fat*'] = [
//                'class' => 'yii\i18n\PhpMessageSource',
//                'basePath' => '@app/message',
//                'sourceLanguage' => 'zh-CN',
//                'fileMap' => [
//                    'fat' => 'fat.php',
//                    'fat/error' => 'error.php'
//                ]
//            ];
//        }
    }

}