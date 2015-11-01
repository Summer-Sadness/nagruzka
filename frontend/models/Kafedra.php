<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kafedra".
 *
 * @property integer $id
 * @property string $nazvanie
 * @property integer $fakultet
 *
 * @property Fakultet $fakultet0
 * @property Specialnost[] $specialnosts
 */
class Kafedra extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kafedra';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nazvanie', 'fakultet'], 'required'],
            [['nazvanie'], 'string'],
            [['fakultet'], 'integer']
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
            'fakultet' => Yii::t('app', 'Fakultet'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFakultet0()
    {
        return $this->hasOne(Fakultet::className(), ['id' => 'fakultet']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpecialnosts()
    {
        return $this->hasMany(Specialnost::className(), ['kafedra' => 'id']);
    }
}
