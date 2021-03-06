<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\NagruzkaPrepod;

/**
 * NagruzkaPrepodSearch represents the model behind the search form about `frontend\models\NagruzkaPrepod`.
 */
class NagruzkaPrepodSearch extends NagruzkaPrepod
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'prepodavatel', 'distsiplina'], 'integer'],
            [['konsultacii', 'modul', 'kursovoi', 'kontrolnii', 'prakticheskie'], 'number'],
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
        $query = NagruzkaPrepod::find();

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
            'prepodavatel' => $this->prepodavatel,
            'konsultacii' => $this->konsultacii,
            'modul' => $this->modul,
            'kursovoi' => $this->kursovoi,
            'kontrolnii' => $this->kontrolnii,
            'prakticheskie' => $this->prakticheskie,
            'distsiplina' => $this->distsiplina,
        ]);

        return $dataProvider;
    }
}
