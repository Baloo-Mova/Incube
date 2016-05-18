<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FormOrderInPr;

/**
 * FormOrderInPrEmpSearch represents the model behind the search form about `common\models\FormOrderInPr`.
 */
class FormOrderInPrEmpSearch extends FormOrderInPr
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'coast'], 'integer'],
            [['name', 'in_direction', 'patents', 'date_b', 'date_e', 'cost_period', 'key_perf_ind', 'key_market', 'coast_direction', 'tax_coast_direction', 'info_spec', 'rating_effective', 'another_effects'], 'safe'],
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
        $query = FormOrderInPr::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date_b' => $this->date_b,
            'date_e' => $this->date_e,
            'coast' => $this->coast,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'in_direction', $this->in_direction])
            ->andFilterWhere(['like', 'patents', $this->patents])
            ->andFilterWhere(['like', 'cost_period', $this->cost_period])
            ->andFilterWhere(['like', 'key_perf_ind', $this->key_perf_ind])
            ->andFilterWhere(['like', 'key_market', $this->key_market])
            ->andFilterWhere(['like', 'coast_direction', $this->coast_direction])
            ->andFilterWhere(['like', 'tax_coast_direction', $this->tax_coast_direction])
            ->andFilterWhere(['like', 'info_spec', $this->info_spec])
            ->andFilterWhere(['like', 'rating_effective', $this->rating_effective])
            ->andFilterWhere(['like', 'another_effects', $this->another_effects]);

        return $dataProvider;
    }
}
