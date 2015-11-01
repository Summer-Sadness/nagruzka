<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Prepodavatel;

/**
 * PrepodavatelSearch represents the model behind the search form about `backend\models\Prepodavatel`.
 */
class PrepodavatelSearch extends Prepodavatel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'stavka'], 'integer'],
            [['fio', 'zvanie'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Prepodavatel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query->joinWith('stavka0');

        $query->andFilterWhere([
            'id' => $this->id,
            //'stavka' => $this->stavka,
        ]);

        $query->andFilterWhere(['like', 'fio', $this->fio])
            ->andFilterWhere(['like', 'zvanie', $this->zvanie])
            ->andFilterWhere(['like', 'stavka.chasi', $this->stavka]);

        return $dataProvider;
    }
}
