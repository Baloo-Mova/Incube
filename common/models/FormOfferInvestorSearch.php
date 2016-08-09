<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FormOfferInvestor;

/**
 * FormOfferInvestorSearch represents the model behind the search form about `common\models\FormOfferInvestor`.
 */
class FormOfferInvestorSearch extends FormOfferInvestor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_author', 'id_publisher', 'economic_activities', 'investor_cost', 'duration_project', 'term_refund', 'status'], 'integer'],
            [['investor_name', 'investor_contacts', 'stage_project', 'region', 'plan_rent', 'other', 'logo', 'date_create', 'date_publish'], 'safe'],
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
        $query = FormOfferInvestor::find();

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
            'id_author' => $this->id_author,
            'id_publisher' => $this->id_publisher,
            'economic_activities' => $this->economic_activities,
            'investor_cost' => $this->investor_cost,
            'duration_project' => $this->duration_project,
            'term_refund' => $this->term_refund,
            'date_create' => $this->date_create,
            'date_publish' => $this->date_publish,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'investor_name', $this->investor_name])
            ->andFilterWhere(['like', 'investor_contacts', $this->investor_contacts])
            ->andFilterWhere(['like', 'stage_project', $this->stage_project])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'plan_rent', $this->plan_rent])
            ->andFilterWhere(['like', 'other', $this->other])
            ->andFilterWhere(['like', 'logo', $this->logo]);

        return $dataProvider;
    }
}
