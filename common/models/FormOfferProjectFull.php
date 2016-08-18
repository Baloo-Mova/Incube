<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "form_offer_project_full".
 *
 * @property integer $id
 * @property integer $author_id
 * @property integer $publisher_id
 * @property integer $economic_activities_id
 * @property string $project_manager
 * @property string $project_contacts
 * @property string $phone
 * @property string $email
 * @property string $web_site
 * @property string $project_name
 * @property string $project_goal
 * @property string $project_aspects
 * @property string $project_beneficaries
 * @property string $description
 * @property integer $project_cost
 * @property string $project_duration
 * @property string $region
 * @property string $project_stage
 * @property string $available_funding
 * @property string $other
 * @property string $logo
 * @property string $project_files
 * @property string $date_create
 * @property string $date_publish
 * @property integer $status
 *
 * @property EconomicActivities $economicActivities
 * @property User $publisher
 * @property User $author
 */
class FormOfferProjectFull extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_offer_project_full';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author_id', 'publisher_id', 'economic_activities_id', 'project_cost', 'status'], 'integer'],
            [['project_manager', 'project_contacts', 'project_goal', 'project_aspects', 'project_beneficaries', 'description', 'project_stage', 'available_funding', 'other'], 'string'],
            [['date_create', 'date_publish'], 'safe'],
            [['phone', 'email', 'web_site', 'project_name', 'project_duration', 'region', 'logo', 'project_files'], 'string', 'max' => 255],
            [['economic_activities_id'], 'exist', 'skipOnError' => true, 'targetClass' => EconomicActivities::className(), 'targetAttribute' => ['economic_activities_id' => 'id']],
            [['publisher_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['publisher_id' => 'id']],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Ідентифікатор автора',
            'publisher_id' => 'Ідентифікатор редактора',
            'economic_activities_id' => 'Галузь використання',
            'project_manager' => 'Керівник проекту',
            'project_contacts' => 'Контактні дані',
            'phone' => 'Телефон',
            'email' => 'Ел. пошта',
            'web_site' => 'Веб-сайт',
            'project_name' => 'Назва проекту',
            'project_goal' => 'Мета проекту',
            'project_aspects' => 'Іноваційні аспекти та переваги проекту',
            'project_beneficaries' => 'Отримувачі вигоди',
            'description' => 'Стислий опис проекту',
            'project_cost' => 'Вартість проекту',
            'project_duration' => 'Період реалізації проекту',
            'region' => 'Географія проекту',
            'project_stage' => 'Стадія проекту',
            'available_funding' => 'Джерела фінансування',
            'other' => 'Інше',
            'logo' => 'Лого',
            'project_files' => 'Додаткові файли проекту',
            'date_create' => 'Дата створення',
            'date_publish' => 'Дата публікації',
            'status' => 'Статус',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }
}
