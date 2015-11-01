<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "fakultet".
 *
 * @property integer $id
 * @property string $nazvanie
 *
 * @property Kafedra[] $kafedras
 */
class Fakultet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fakultet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nazvanie'], 'required'],
            [['nazvanie'], 'string']
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKafedras()
    {
        return $this->hasMany(Kafedra::className(), ['fakultet' => 'id']);
    }
}
