<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "prepodavatel".
 *
 * @property integer $id
 * @property string $fio
 * @property string $zvanie
 * @property integer $stavka
 *
 * @property NagruzkaPrepod[] $nagruzkaPrepods
 * @property Stavka $stavka0
 */
class Prepodavatel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prepodavatel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fio', 'zvanie', 'stavka'], 'required'],
            [['fio', 'zvanie'], 'string'],
            [['stavka'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fio' => Yii::t('app', 'Fio'),
            'zvanie' => Yii::t('app', 'Zvanie'),
            'stavka' => Yii::t('app', 'Stavka'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNagruzkaPrepods()
    {
        return $this->hasMany(NagruzkaPrepod::className(), ['prepodavatel' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStavka0()
    {
        return $this->hasOne(Stavka::className(), ['id' => 'stavka']);
    }
}
