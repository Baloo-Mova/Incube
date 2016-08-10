<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "form_offer_problem".
 *
 * @property integer $id
 * @property integer $author_id
 * @property integer $publisher_id
 * @property integer $economic_activities_id
 * @property string $problem_name
 * @property string $problem_description
 * @property string $region
 * @property string $other
 * @property string $logo
 * @property string $date_create
 * @property string $date_publish
 * @property integer $status
 *
 * @property User $author
 * @property User $publisher
 * @property EconomicActivities $economicActivities
 */
class FormOfferProblem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_offer_problem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author_id', 'publisher_id', 'economic_activities_id', 'status'], 'integer'],
            [['problem_description', 'other'], 'string'],
            [['date_create', 'date_publish'], 'safe'],
            [['problem_name', 'region', 'logo'], 'string', 'max' => 255],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
            [['publisher_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['publisher_id' => 'id']],
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
            'author_id' => 'Id Автора',
            'publisher_id' => 'ID редактора',
            'economic_activities_id' => 'Галузь',
            'problem_name' => 'Назва проблеми',
            'problem_description' => 'Опис проблеми',
            'region' => 'Регіон',
            'other' => 'Інше',
            'logo' => 'Зображення',
            'date_create' => 'Дата створення',
            'date_publish' => 'Дата публікації',
            'status' => 'статус',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
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
    public function getEconomicActivities()
    {
        return $this->hasOne(EconomicActivities::className(), ['id' => 'economic_activities_id']);
    }
}
