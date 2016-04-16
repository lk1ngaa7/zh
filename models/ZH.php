<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zh".
 *
 * @property integer $id
 * @property integer $number
 * @property string $name
 * @property string $gender
 * @property string $class
 * @property string $jianhuren
 * @property string $phone
 */
class ZH extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zh';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number', 'name', 'gender', 'class', 'jianhuren', 'phone'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '',
            'number' => 'Number',
            'name' => 'Name',
            'gender' => 'Gender',
            'class' => 'Class',
            'jianhuren' => 'Jianhuren',
            'phone' => 'Phone',
        ];
    }
}
