<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Economic_Activities".
 *
 * @property integer $id
 * @property string $name
 * @property integer $pid
 * @property string $s_code
 *
 * @property EconomicActivities $id0
 * @property EconomicActivities $economicActivities
 * @property FormOfferProject $id1
 * @property EconomicActivities $p
 * @property EconomicActivities[] $economicActivities0
 * @property FormOfferProject[] $ids
 * @property FormOfferProject[] $formOfferProjects
 */
class EconomicActivities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Economic_Activities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid'], 'integer'],
            [['name', 's_code'], 'string', 'max' => 255],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => EconomicActivities::className(), 'targetAttribute' => ['id' => 'pid']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => FormOfferProject::className(), 'targetAttribute' => ['id' => 'economic_activities']],
            [['pid'], 'exist', 'skipOnError' => true, 'targetClass' => EconomicActivities::className(), 'targetAttribute' => ['pid' => 'id']],
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
            'pid' => 'Pid',
            's_code' => 'S Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(EconomicActivities::className(), ['pid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEconomicActivities()
    {
        return $this->hasOne(EconomicActivities::className(), ['id' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId1()
    {
        return $this->hasOne(FormOfferProject::className(), ['economic_activities' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getP()
    {
        return $this->hasOne(EconomicActivities::className(), ['id' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEconomicActivities0()
    {
        return $this->hasMany(EconomicActivities::className(), ['pid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIds()
    {
        return $this->hasMany(FormOfferProject::className(), ['economic_activities' => 'id'])->viaTable('Economic_Activities', ['id' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormOfferProjects()
    {
        return $this->hasMany(FormOfferProject::className(), ['economic_activities' => 'id']);
    }
}
