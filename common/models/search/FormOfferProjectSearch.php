<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FormOfferProject;

/**
 * FormOfferProjectSearch represents the model behind the search form about `common\models\FormOfferProject`.
 */
class FormOfferProjectSearch extends FormOfferProject
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'economic_activities', 'project_cost'], 'integer'],
            [['project_name', 'project_goal', 'project_aspects', 'adress', 'phone', 'email', 'web_site', 'incube_help', 'region', 'stage_work', 'available_funding', 'country', 'date_b', 'date_e','files_folder'], 'safe'],
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
        $query = FormOfferProject::find();

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
            'economic_activities' => $this->economic_activities,
            'project_cost' => $this->project_cost,
            'date_b' => $this->date_b,
            'date_e' => $this->date_e,
        ]);

        $query->andFilterWhere(['like', 'project_name', $this->project_name])
            ->andFilterWhere(['like', 'project_goal', $this->project_goal])
            ->andFilterWhere(['like', 'project_aspects', $this->project_aspects])
            ->andFilterWhere(['like', 'adress', $this->adress])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'web_site', $this->web_site])
            ->andFilterWhere(['like', 'incube_help', $this->incube_help])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'stage_work', $this->stage_work])
            ->andFilterWhere(['like', 'available_funding', $this->available_funding])
            ->andFilterWhere(['like', 'country', $this->country]);

        return $dataProvider;
    }
}
