<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FormOfferProjectFull;

/**
 * FormOfferProjectFullSearch represents the model behind the search form about `common\models\FormOfferProjectFull`.
 */
class FormOfferProjectFullSearch extends FormOfferProjectFull
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'author_id', 'publisher_id', 'economic_activities_id', 'project_cost', 'status'], 'integer'],
            [['project_manager', 'project_contacts', 'phone', 'email', 'web_site', 'project_name', 'project_goal', 'project_aspects', 'project_beneficaries', 'description', 'project_duration', 'region', 'project_stage', 'available_funding', 'other', 'logo', 'project_files', 'date_create', 'date_publish'], 'safe'],
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
        $query = FormOfferProjectFull::find();

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
            'author_id' => $this->author_id,
            'publisher_id' => $this->publisher_id,
            'economic_activities_id' => $this->economic_activities_id,
            'project_cost' => $this->project_cost,
            'date_create' => $this->date_create,
            'date_publish' => $this->date_publish,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'project_manager', $this->project_manager])
            ->andFilterWhere(['like', 'project_contacts', $this->project_contacts])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'web_site', $this->web_site])
            ->andFilterWhere(['like', 'project_name', $this->project_name])
            ->andFilterWhere(['like', 'project_goal', $this->project_goal])
            ->andFilterWhere(['like', 'project_aspects', $this->project_aspects])
            ->andFilterWhere(['like', 'project_beneficaries', $this->project_beneficaries])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'project_duration', $this->project_duration])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'project_stage', $this->project_stage])
            ->andFilterWhere(['like', 'available_funding', $this->available_funding])
            ->andFilterWhere(['like', 'other', $this->other])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'project_files', $this->project_files]);

        return $dataProvider;
    }
}
