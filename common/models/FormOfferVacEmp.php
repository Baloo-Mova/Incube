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
 * @property string $sector_org
 * @property string $adress
 * @property string $phone
 * @property string $email
 * @property string $web_site
 *
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
            [['name_org', 'type_org', 'sector_org', 'phone', 'email', 'web_site'], 'string', 'max' => 255],
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
            'sector_org' => 'Sector Org',
            'adress' => 'Adress',
            'phone' => 'Phone',
            'email' => 'Email',
            'web_site' => 'Web Site',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVacancies()
    {
        return $this->hasMany(Vacancy::className(), ['fid' => 'id']);
    }
}
