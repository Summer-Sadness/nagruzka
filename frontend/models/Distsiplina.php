<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "distsiplina".
 *
 * @property integer $id
 * @property string $nazvanie
 * @property integer $ekzamen
 * @property integer $zachet
 * @property integer $kursovoi
 * @property integer $modul
 * @property integer $podgrupchel
 * @property integer $specialnost
 *
 * @property Specialnost $specialnost0
 * @property NagruzkaPrepod[] $nagruzkaPrepods
 * @property Norma[] $normas
 */
class Distsiplina extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'distsiplina';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nazvanie', 'podgrupchel', 'specialnost'], 'required'],
            [['nazvanie'], 'string'],
            [['ekzamen', 'zachet', 'kursovoi', 'modul', 'podgrupchel', 'specialnost'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nazvanie' => Yii::t('app', 'Nazvanie'),
            'ekzamen' => Yii::t('app', 'Ekzamen'),
            'zachet' => Yii::t('app', 'Zachet'),
            'kursovoi' => Yii::t('app', 'Kursovoi'),
            'modul' => Yii::t('app', 'Modul'),
            'podgrupchel' => Yii::t('app', 'Podgrupchel'),
            'specialnost' => Yii::t('app', 'Specialnost'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpecialnost0()
    {
        return $this->hasOne(Specialnost::className(), ['id' => 'specialnost']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNagruzkaPrepods()
    {
        return $this->hasMany(NagruzkaPrepod::className(), ['distsiplina' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNormas()
    {
        return $this->hasMany(Norma::className(), ['distsiplina' => 'id']);
    }
}
