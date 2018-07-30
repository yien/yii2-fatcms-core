<?php
namespace fatcms\core\db;


class ActiveRecord extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class ' => 'yii\behaviors\TimestampBehavior'
            ]
        ];

    }
}