<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "form_offer_project".
 *
 * @property integer $id
 * @property string $project_name
 * @property string $project_goal
 * @property string $project_aspects
 * @property string $adress
 * @property string $phone
 * @property string $email
 * @property string $web_site
 * @property string $incube_help
 * @property integer $economic_activities
 * @property string $region
 * @property string $stage_work
 * @property integer $project_cost
 * @property string $available_funding
 * @property string $country
 * @property string $date_b
 * @property string $date_e
 * 
 * @property EconomicActivities $economicActivities
 * @property EconomicActivities[] $ids
 * @property FilesForFormOfferProject[] $filesForFormOfferProjects
 * @property EconomicActivities $economicActivities0
 */
class FormOfferProject extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile[]
     */
    public $file;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_offer_project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_goal', 'project_aspects', 'adress', 'incube_help','files_folder'], 'string'],
            [['economic_activities', 'project_cost'], 'integer'],
            [['date_b', 'date_e'], 'safe'],
            [['project_name', 'phone', 'email', 'web_site', 'region', 'stage_work', 'available_funding', 'country'], 'string', 'max' => 255],
            [['economic_activities'], 'exist', 'skipOnError' => true, 'targetClass' => EconomicActivities::className(), 'targetAttribute' => ['economic_activities' => 'id']],
            [['file'],'file','maxFiles'=>'10']
            ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_name' => 'Назва проекту',
            'project_goal' => 'Основна ідея проекту',
            'project_aspects' => 'Інноваційні аспекти та переваги проекту',
            'adress' => 'Адреса',
            'phone' => 'Тел.',
            'email' => 'Email',
            'web_site' => 'Web-Site',
            'incube_help' => 'Як наша платформа може Вам допомогти',
            'economic_activities' => 'Сфера діяльності',
            'region' => 'Регіон',
            'stage_work' => 'Стадія розробки',
            'project_cost' => 'Загальна вартість проекту',
            'available_funding' => 'Наявне фінансування',
            'country' => 'Країна реєстрації проекту',
            'date_b' => 'Дата початку виконання робіт',
            'date_e' => 'Дата завершення інформаційних робіт',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEconomicActivities()
    {
        return $this->hasOne(EconomicActivities::className(), ['id' => 'economic_activities']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIds()
    {
        return $this->hasMany(EconomicActivities::className(), ['pid' => 'id'])->viaTable('Economic_Activities', ['id' => 'economic_activities']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilesForFormOfferProjects()
    {
        return $this->hasMany(FilesForFormOfferProject::className(), ['pid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEconomicActivities0()
    {
        return $this->hasOne(EconomicActivities::className(), ['id' => 'economic_activities']);
    }
    
    
   
}
