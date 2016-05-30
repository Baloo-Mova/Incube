<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "form_order_in_pr".
 *
 * @property integer $id
 * @property string $name
 * @property string $in_direction
 * @property string $patents
 * @property string $date_b
 * @property string $date_e
 * @property string $cost_period
 * @property string $key_perf_ind
 * @property string $key_market
 * @property integer $coast
 * @property string $coast_direction
 * @property string $tax_coast_direction
 * @property string $info_spec
 * @property string $rating_effective
 * @property string $another_effects
 * @property integer $publisher_id
 * @property integer $economic_activities_id
 * @property integer $status
 *
 * @property AnotherFilesInPr[] $anotherFilesInPrs
 * @property CharInPr $charInPr
 * @property EconomicActivities $economicActivities
 * @property User $publisher
 * @property PerformerProject[] $performerProjects
 */
class FormOrderInPr extends \yii\db\ActiveRecord
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
        return 'form_order_in_pr';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patents', 'key_perf_ind', 'key_market', 'coast_direction', 'tax_coast_direction', 'info_spec', 'rating_effective', 'another_effects'], 'string'],
            [['date_b', 'date_e'], 'safe'],
            [['coast', 'publisher_id', 'economic_activities_id', 'status'], 'integer'],
            [['economic_activities_id'], 'required'],
            [['name', 'in_direction', 'cost_period'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'in_direction' => 'In Direction',
            'patents' => 'Patents',
            'date_b' => 'Date B',
            'date_e' => 'Date E',
            'cost_period' => 'Cost Period',
            'key_perf_ind' => 'Key Perf Ind',
            'key_market' => 'Key Market',
            'coast' => 'Coast',
            'coast_direction' => 'Coast Direction',
            'tax_coast_direction' => 'Tax Coast Direction',
            'info_spec' => 'Info Spec',
            'rating_effective' => 'Rating Effective',
            'another_effects' => 'Another Effects',
            'publisher_id' => 'Publisher ID',
            'economic_activities_id' => 'Economic Activities ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnotherFilesInPrs()
    {
        return $this->hasMany(AnotherFilesInPr::className(), ['in_pr_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCharInPr()
    {
        return $this->hasOne(CharInPr::className(), ['ipid' => 'id']);
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
    public function getPerformerProjects()
    {
        return $this->hasMany(PerformerProject::className(), ['ipid' => 'id']);
    }
}
