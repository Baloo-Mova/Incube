<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FormApplicationForTheProject;

/**
 * FormApplicationForTheProjectSearch represents the model behind the search form about `common\models\FormApplicationForTheProject`.
 */
class FormApplicationForTheProjectSearch extends FormApplicationForTheProject
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'project_cost'], 'integer'],
            [['name_f', 'surname', 'name_s', 'Adress', 'project_name', 'project_release', 'project_goal', 'project_result', 'date_b', 'date_e', 'project_info', 'date_reg_proj'], 'safe'],
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
        $query = FormApplicationForTheProject::find();

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
            'project_cost' => $this->project_cost,
            'date_reg_proj' => $this->date_reg_proj,
        ]);

        $query->andFilterWhere(['like', 'name_f', $this->name_f])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'name_s', $this->name_s])
            ->andFilterWhere(['like', 'Adress', $this->Adress])
            ->andFilterWhere(['like', 'project_name', $this->project_name])
            ->andFilterWhere(['like', 'project_release', $this->project_release])
            ->andFilterWhere(['like', 'project_goal', $this->project_goal])
            ->andFilterWhere(['like', 'project_result', $this->project_result])
            ->andFilterWhere(['like', 'project_info', $this->project_info]);

        return $dataProvider;
    }
}
