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
 * @property integer $economic_activities_id
 * @property string $region
 * @property string $stage_work
 * @property integer $project_cost
 * @property string $available_funding
 * @property string $country
 * @property string $date_b
 * @property string $date_e
 * @property integer $publisher_id
 * @property integer $status
 *
 * @property FilesForFormOfferProject[] $filesForFormOfferProjects
 * @property EconomicActivities $economicActivities
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
            [['project_goal', 'project_aspects', 'adress', 'incube_help'], 'string'],
            [['economic_activities_id', 'project_cost', 'publisher_id', 'status'], 'integer'],
            [['date_b', 'date_e'], 'safe'],
            [['project_name', 'phone', 'email', 'web_site', 'region', 'stage_work', 'available_funding', 'country'], 'string', 'max' => 255],
            [['economic_activities_id'], 'exist', 'skipOnError' => true, 'targetClass' => EconomicActivities::className(), 'targetAttribute' => ['economic_activities_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_name' => 'Project Name',
            'project_goal' => 'Project Goal',
            'project_aspects' => 'Project Aspects',
            'adress' => 'Adress',
            'phone' => 'Phone',
            'email' => 'Email',
            'web_site' => 'Web Site',
            'incube_help' => 'Incube Help',
            'economic_activities_id' => 'Economic Activities ID',
            'region' => 'Region',
            'stage_work' => 'Stage Work',
            'project_cost' => 'Project Cost',
            'available_funding' => 'Available Funding',
            'country' => 'Country',
            'date_b' => 'Date B',
            'date_e' => 'Date E',
            'publisher_id' => 'Publisher ID',
            'status' => 'Status',
        ];
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
    public function getEconomicActivities()
    {
        return $this->hasOne(EconomicActivities::className(), ['id' => 'economic_activities_id']);
    }
}
