<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FormOfferProblem as FormOfferProblemModel;

/**
 * FormOfferProblem represents the model behind the search form about `common\models\FormOfferProblem`.
 */
class FormOfferProblem extends FormOfferProblemModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'author_id', 'publisher_id', 'economic_activities_id', 'status'], 'integer'],
            [['problem_name', 'problem_description', 'region', 'other', 'logo', 'date_create', 'date_publish'], 'safe'],
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
        $query = FormOfferProblemModel::find();

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
            'date_create' => $this->date_create,
            'date_publish' => $this->date_publish,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'problem_name', $this->problem_name])
            ->andFilterWhere(['like', 'problem_description', $this->problem_description])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'other', $this->other])
            ->andFilterWhere(['like', 'logo', $this->logo]);

        return $dataProvider;
    }
}
