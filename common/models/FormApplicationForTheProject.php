<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "form_application_for_the_project".
 *
 * @property integer $id
 * @property string $name_f
 * @property string $surname
 * @property string $name_s
 * @property string $Adress
 * @property string $project_name
 * @property string $project_release
 * @property string $project_goal
 * @property string $project_result
 * @property string $date_b
 * @property string $date_e
 * @property integer $project_cost
 * @property string $project_info
 * @property string $date_reg_proj
 */
class FormApplicationForTheProject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_application_for_the_project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Adress', 'project_release', 'project_goal', 'project_result', 'project_info'], 'string'],
            [['date_b', 'date_e', 'date_reg_proj'], 'safe'],
            [['project_cost'], 'integer'],
            [['name_f', 'surname', 'name_s', 'project_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_f' => 'Ім`я',
            'surname' => 'Прізвище',
            'name_s' => 'По батькові',
            'Adress' => 'Адреса',
            'project_name' => 'Назва проекту',
            'project_release' => 'Необхідність реалізації проекту',
            'project_goal' => 'Мета проекту',
            'project_result' => 'Результат успішної реалізації проекту',
            'date_b' => 'Дата початку',
            'date_e' => 'Дата закінчення',
            'project_cost' => 'Орієнтована вартість проекту',
            'project_info' => 'Додаткова інформація',
            'date_reg_proj' => 'Дата реєстрації',
        ];
    }
}
