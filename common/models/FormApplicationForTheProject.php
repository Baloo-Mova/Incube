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
 * @property integer $economic_activities_id
 * @property integer $publisher_id
 * @property integer $status
 *
 * @property EconomicActivities $economicActivities
 * @property User $publisher
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
            [['project_cost', 'economic_activities_id', 'publisher_id', 'status'], 'integer'],
            [['economic_activities_id'], 'required'],
            [['name_f', 'surname', 'name_s', 'project_name'], 'string', 'max' => 255],
            [['economic_activities_id'], 'exist', 'skipOnError' => true, 'targetClass' => EconomicActivities::className(), 'targetAttribute' => ['economic_activities_id' => 'id']],
            [['publisher_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['publisher_id' => 'id']],
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
            'economic_activities_id' => 'Economic Activities ID',
            'publisher_id' => 'Publisher ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEconomicActivities()
    {
        return $this->hasOne(EconomicActivities::className(), ['id' => 'economic_activities_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPublisher()
    {
        return $this->hasOne(User::className(), ['id' => 'publisher_id']);
    }
}
