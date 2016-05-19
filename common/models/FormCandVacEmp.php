<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "form_cand_vac_emp".
 *
 * @property integer $id
 * @property string $name_f
 * @property string $surname
 * @property string $name_s
 * @property string $date_birth
 * @property string $work_info
 * @property string $education
 * @property string $trainee
 * @property string $projects
 * @property string $skills
 * @property string $more_info
 * @property string $adress
 * @property string $phone
 * @property string $email
 *
 * @property TableCandVac[] $tableCandVacs
 */
class FormCandVacEmp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_cand_vac_emp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_birth'], 'safe'],
            [['work_info', 'education', 'trainee', 'projects', 'skills', 'more_info', 'adress'], 'string'],
            [['name_f', 'surname', 'name_s', 'phone', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_f' => 'Name F',
            'surname' => 'Surname',
            'name_s' => 'Name S',
            'date_birth' => 'Date Birth',
            'work_info' => 'Work Info',
            'education' => 'Education',
            'trainee' => 'Trainee',
            'projects' => 'Projects',
            'skills' => 'Skills',
            'more_info' => 'More Info',
            'adress' => 'Adress',
            'phone' => 'Phone',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTableCandVacs()
    {
        return $this->hasMany(TableCandVac::className(), ['cid' => 'id']);
    }
}
