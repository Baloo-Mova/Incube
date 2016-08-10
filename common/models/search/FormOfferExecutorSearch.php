<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FormOfferExecutor;

/**
 * FormOfferExecutorSearch represents the model behind the search form about `common\models\FormOfferExecutor`.
 */
class FormOfferExecutorSearch extends FormOfferExecutor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'author_id', 'publisher_id', 'status'], 'integer'],
            [['executor_firstname', 'executor_secondname', 'date_birth', 'experience', 'education', 'internship', 'participation_projects', 'description', 'contacts', 'other', 'logo', 'file_resume', 'date_create', 'date_publish'], 'safe'],
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
        $query = FormOfferExecutor::find();

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
            'date_birth' => $this->date_birth,
            'date_create' => $this->date_create,
            'date_publish' => $this->date_publish,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'executor_firstname', $this->executor_firstname])
            ->andFilterWhere(['like', 'executor_secondname', $this->executor_secondname])
            ->andFilterWhere(['like', 'experience', $this->experience])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'internship', $this->internship])
            ->andFilterWhere(['like', 'participation_projects', $this->participation_projects])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'contacts', $this->contacts])
            ->andFilterWhere(['like', 'other', $this->other])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'file_resume', $this->file_resume]);

        return $dataProvider;
    }
}
