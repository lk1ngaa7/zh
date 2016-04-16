<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "citys".
 *
 * @property integer $id
 * @property string $name
 * @property integer $trainstationnum
 * @property integer $planestationnum
 *
 * @property Planelinein[] $planelineins
 * @property Planelineout[] $planelineouts
 * @property Planestationforcity[] $planestationforcities
 * @property Trainlinesin[] $trainlinesins
 * @property Trainlinesout[] $trainlinesouts
 * @property Trainstationforcity[] $trainstationforcities
 * @property Transfertrainline[] $transfertrainlines
 * @property Transfertrainline[] $transfertrainlines0
 */
class Citys extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'citys';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['trainstationnum', 'planestationnum'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'trainstationnum' => 'Trainstationnum',
            'planestationnum' => 'Planestationnum',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanelineins()
    {
        return $this->hasMany(Planelinein::className(), ['cityid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanelineouts()
    {
        return $this->hasMany(Planelineout::className(), ['cityid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanestationforcities()
    {
        return $this->hasMany(Planestationforcity::className(), ['cityid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrainlinesins()
    {
        return $this->hasMany(Trainlinesin::className(), ['cityid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrainlinesouts()
    {
        return $this->hasMany(Trainlinesout::className(), ['cityid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrainstationforcities()
    {
        return $this->hasMany(Trainstationforcity::className(), ['cityid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransfertrainlines()
    {
        return $this->hasMany(Transfertrainline::className(), ['fromcityid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransfertrainlines0()
    {
        return $this->hasMany(Transfertrainline::className(), ['tocityid' => 'id']);
    }
}
