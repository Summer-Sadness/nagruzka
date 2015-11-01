<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Distsiplina;

/**
 * DistsiplinaSearch represents the model behind the search form about `frontend\models\Distsiplina`.
 */
class DistsiplinaSearch extends Distsiplina
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ekzamen', 'zachet', 'kursovoi', 'modul', 'podgrupchel', 'specialnost'], 'integer'],
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
        $query = Distsiplina::find();

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
            'ekzamen' => $this->ekzamen,
            'zachet' => $this->zachet,
            'kursovoi' => $this->kursovoi,
            'modul' => $this->modul,
            'podgrupchel' => $this->podgrupchel,
            'specialnost' => $this->specialnost,
        ]);

        $query->andFilterWhere(['like', 'nazvanie', $this->nazvanie]);

        return $dataProvider;
    }
}
