<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "norma".
 *
 * @property integer $id
 * @property integer $distsiplina
 * @property double $lekcii
 * @property double $prakticheskie
 * @property double $laboratornie
 * @property double $srs
 *
 * @property Distsiplina $distsiplina0
 * @property RaschetNagruzki[] $raschetNagruzkis
 */
class Norma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'norma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['distsiplina'], 'required'],
            [['distsiplina'], 'integer'],
            [['lekcii', 'prakticheskie', 'laboratornie', 'srs'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'distsiplina' => Yii::t('app', 'Distsiplina'),
            'lekcii' => Yii::t('app', 'Lekcii'),
            'prakticheskie' => Yii::t('app', 'Prakticheskie'),
            'laboratornie' => Yii::t('app', 'Laboratornie'),
            'srs' => Yii::t('app', 'Srs'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistsiplina0()
    {
        return $this->hasOne(Distsiplina::className(), ['id' => 'distsiplina']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRaschetNagruzkis()
    {
        return $this->hasMany(RaschetNagruzki::className(), ['norma' => 'id']);
    }
}
