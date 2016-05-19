<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FormCandVacEmp;

/**
 * FormCandVacEmpSearch represents the model behind the search form about `common\models\FormCandVacEmp`.
 */
class FormCandVacEmpSearch extends FormCandVacEmp
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name_f', 'surname', 'name_s', 'date_birth', 'work_info', 'education', 'trainee', 'projects', 'skills', 'more_info', 'adress', 'phone', 'email'], 'safe'],
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
        $query = FormCandVacEmp::find();

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
            'date_birth' => $this->date_birth,
        ]);

        $query->andFilterWhere(['like', 'name_f', $this->name_f])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'name_s', $this->name_s])
            ->andFilterWhere(['like', 'work_info', $this->work_info])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'trainee', $this->trainee])
            ->andFilterWhere(['like', 'projects', $this->projects])
            ->andFilterWhere(['like', 'skills', $this->skills])
            ->andFilterWhere(['like', 'more_info', $this->more_info])
            ->andFilterWhere(['like', 'adress', $this->adress])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
