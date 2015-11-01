<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "specialnost".
 *
 * @property integer $id
 * @property string $nazvanie
 * @property integer $kafedra
 *
 * @property Distsiplina[] $distsiplinas
 * @property Kafedra $kafedra0
 */
class Specialnost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'specialnost';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nazvanie', 'kafedra'], 'required'],
            [['nazvanie'], 'string'],
            [['kafedra'], 'integer']
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
            'kafedra' => Yii::t('app', 'Kafedra'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistsiplinas()
    {
        return $this->hasMany(Distsiplina::className(), ['specialnost' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKafedra0()
    {
        return $this->hasOne(Kafedra::className(), ['id' => 'kafedra']);
    }
}
