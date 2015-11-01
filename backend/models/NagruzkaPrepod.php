<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nagruzka_prepod".
 *
 * @property integer $id
 * @property integer $prepodavatel
 * @property double $konsultacii
 * @property double $modul
 * @property double $kursovoi
 * @property double $kontrolnii
 * @property double $prakticheskie
 * @property integer $distsiplina
 *
 * @property Prepodavatel $prepodavatel0
 * @property Distsiplina $distsiplina0
 */
class NagruzkaPrepod extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nagruzka_prepod';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prepodavatel', 'distsiplina'], 'required'],
            [['prepodavatel', 'distsiplina'], 'integer'],
            [['konsultacii', 'modul', 'kursovoi', 'kontrolnii', 'prakticheskie'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'prepodavatel' => Yii::t('app', 'Prepodavatel'),
            'konsultacii' => Yii::t('app', 'Konsultacii'),
            'modul' => Yii::t('app', 'Modul'),
            'kursovoi' => Yii::t('app', 'Kursovoi'),
            'kontrolnii' => Yii::t('app', 'Kontrolnii'),
            'prakticheskie' => Yii::t('app', 'Prakticheskie'),
            'distsiplina' => Yii::t('app', 'Distsiplina'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrepodavatel0()
    {
        return $this->hasOne(Prepodavatel::className(), ['id' => 'prepodavatel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistsiplina0()
    {
        return $this->hasOne(Distsiplina::className(), ['id' => 'distsiplina']);
    }
}
