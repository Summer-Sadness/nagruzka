<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "raschet_nagruzki".
 *
 * @property integer $id
 * @property integer $kurs
 * @property integer $budget
 * @property integer $dogovor
 * @property integer $nSemestra
 * @property string $modul
 * @property string $zachet
 * @property string $ekzamen
 * @property string $kursovoi
 * @property integer $period
 * @property integer $norma
 *
 * @property Period $period0
 * @property Norma $norma0
 */
class RaschetNagruzki extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'raschet_nagruzki';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kurs', 'nSemestra', 'period', 'norma'], 'required'],
            [['kurs', 'budget', 'dogovor', 'nSemestra', 'period', 'norma'], 'integer'],
            [['modul', 'zachet', 'ekzamen', 'kursovoi'], 'string']
        ];
    }

    /**`
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'kurs' => Yii::t('app', 'Kurs'),
            'budget' => Yii::t('app', 'Budget'),
            'dogovor' => Yii::t('app', 'Dogovor'),
            'nSemestra' => Yii::t('app', 'N Semestra'),
            'modul' => Yii::t('app', 'Modul'),
            'zachet' => Yii::t('app', 'Zachet'),
            'ekzamen' => Yii::t('app', 'Ekzamen'),
            'kursovoi' => Yii::t('app', 'Kursovoi'),
            'period' => Yii::t('app', 'Period'),
            'norma' => Yii::t('app', 'Norma'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeriod0()
    {
        return $this->hasOne(Period::className(), ['id' => 'period']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNorma0()
    {
        return $this->hasOne(Norma::className(), ['id' => 'norma']);
    }
}
