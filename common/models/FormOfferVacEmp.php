<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "form_offer_vac_emp".
 *
 * @property integer $id
 * @property string $name_org
 * @property string $info_org
 * @property string $info_org_s
 * @property string $type_org
 * @property string $adress
 * @property string $phone
 * @property string $email
 * @property string $web_site
 * @property integer $economic_activities_id
 * @property integer $publisher_id
 * @property integer $status
 *
 * @property EconomicActivities $economicActivities
 * @property User $publisher
 * @property Vacancy[] $vacancies
 */
class FormOfferVacEmp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_offer_vac_emp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['info_org', 'info_org_s', 'adress'], 'string'],
            [['economic_activities_id'], 'required'],
            [['economic_activities_id', 'publisher_id', 'status'], 'integer'],
            [['name_org', 'type_org', 'phone', 'email', 'web_site'], 'string', 'max' => 255],
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
            'name_org' => 'Name Org',
            'info_org' => 'Info Org',
            'info_org_s' => 'Info Org S',
            'type_org' => 'Type Org',
            'adress' => 'Adress',
            'phone' => 'Phone',
            'email' => 'Email',
            'web_site' => 'Web Site',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVacancies()
    {
        return $this->hasMany(Vacancy::className(), ['fid' => 'id']);
    }
}
