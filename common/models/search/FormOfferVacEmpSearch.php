<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FormOfferVacEmp;

/**
 * FormOfferVacEmpSearch represents the model behind the search form about `common\models\FormOfferVacEmp`.
 */
class FormOfferVacEmpSearch extends FormOfferVacEmp
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name_org', 'info_org', 'info_org_s', 'type_org', 'economic_activities_id', 'adress', 'phone', 'email', 'web_site'], 'safe'],
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
        $query = FormOfferVacEmp::find();

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
            'economic_activities_id'=> $this->economic_activities_id,
        ]);

        $query->andFilterWhere(['like', 'name_org', $this->name_org])
            ->andFilterWhere(['like', 'info_org', $this->info_org])
            ->andFilterWhere(['like', 'info_org_s', $this->info_org_s])
            ->andFilterWhere(['like', 'type_org', $this->type_org]) 
            ->andFilterWhere(['like', 'adress', $this->adress])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'web_site', $this->web_site]);

        return $dataProvider;
    }
}
