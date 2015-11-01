<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "period".
 *
 * @property integer $id
 * @property string $nazvanie
 * @property integer $kNedel
 *
 * @property RaschetNagruzki[] $raschetNagruzkis
 */
class Period extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'period';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nazvanie', 'kNedel'], 'required'],
            [['nazvanie'], 'string'],
            [['kNedel'], 'integer']
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
            'kNedel' => Yii::t('app', 'K Nedel'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRaschetNagruzkis()
    {
        return $this->hasMany(RaschetNagruzki::className(), ['period' => 'id']);
    }
}
