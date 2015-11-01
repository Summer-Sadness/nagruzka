<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "stavka".
 *
 * @property integer $id
 * @property double $chasi
 *
 * @property Prepodavatel[] $prepodavatels
 */
class Stavka extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stavka';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['chasi'], 'required'],
            [['chasi'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'chasi' => Yii::t('app', 'Chasi'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrepodavatels()
    {
        return $this->hasMany(Prepodavatel::className(), ['stavka' => 'id']);
    }
}
