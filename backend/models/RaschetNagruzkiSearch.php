<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RaschetNagruzki;

/**
 * RaschetNagruzkiSearch represents the model behind the search form about `backend\models\RaschetNagruzki`.
 */
class RaschetNagruzkiSearch extends RaschetNagruzki
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'kurs', 'budget', 'dogovor', 'nSemestra', 'period', 'norma'], 'integer'],
            [['modul', 'zachet', 'ekzamen', 'kursovoi'], 'safe'],
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
        $query = RaschetNagruzki::find();

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
            'kurs' => $this->kurs,
            'budget' => $this->budget,
            'dogovor' => $this->dogovor,
            'nSemestra' => $this->nSemestra,
            'period' => $this->period,
            'norma' => $this->norma,
        ]);

        $query->andFilterWhere(['like', 'modul', $this->modul])
            ->andFilterWhere(['like', 'zachet', $this->zachet])
            ->andFilterWhere(['like', 'ekzamen', $this->ekzamen])
            ->andFilterWhere(['like', 'kursovoi', $this->kursovoi]);

        return $dataProvider;
    }
}
