<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Norma;

/**
 * NormaSearch represents the model behind the search form about `backend\models\Norma`.
 */
class NormaSearch extends Norma
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'distsiplina'], 'integer'],
            [['lekcii', 'prakticheskie', 'laboratornie', 'srs'], 'number'],
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
        $query = Norma::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'distsiplina' => $this->distsiplina,
            'lekcii' => $this->lekcii,
            'prakticheskie' => $this->prakticheskie,
            'laboratornie' => $this->laboratornie,
            'srs' => $this->srs,
        ]);

        return $dataProvider;
    }
}
