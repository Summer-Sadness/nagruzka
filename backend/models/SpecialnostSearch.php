<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Specialnost;

/**
 * SpecialnostSearch represents the model behind the search form about `backend\models\Specialnost`.
 */
class SpecialnostSearch extends Specialnost
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'kafedra'], 'integer'],
            [['nazvanie'], 'safe'],
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
        $query = Specialnost::find();

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
            'kafedra' => $this->kafedra,
        ]);

        $query->andFilterWhere(['like', 'nazvanie', $this->nazvanie]);

        return $dataProvider;
    }
}
