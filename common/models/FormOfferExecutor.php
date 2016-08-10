<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "form_offer_executor".
 *
 * @property integer $id
 * @property integer $author_id
 * @property integer $publisher_id
 * @property string $executor_firstname
 * @property string $executor_secondname
 * @property string $date_birth
 * @property string $experience
 * @property string $education
 * @property string $internship
 * @property string $participation_projects
 * @property string $description
 * @property string $contacts
 * @property string $other
 * @property string $logo
 * @property string $file_resume
 * @property string $date_create
 * @property string $date_publish
 * @property integer $status
 *
 * @property User $author
 * @property User $publisher
 */
class FormOfferExecutor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_offer_executor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author_id', 'publisher_id', 'status'], 'integer'],
            [['date_birth', 'date_create', 'date_publish'], 'safe'],
            [['experience', 'education', 'internship', 'participation_projects', 'description', 'contacts', 'other'], 'string'],
            [['executor_firstname', 'executor_secondname', 'logo', 'file_resume'], 'string', 'max' => 255],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
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
            'author_id' => 'ID Автора',
            'publisher_id' => 'ID Редактора',
            'executor_firstname' => 'Ім`я',
            'executor_secondname' => 'Прізвище',
            'date_birth' => 'Дата народження',
            'experience' => 'Досвід роботи',
            'education' => 'Освіта',
            'internship' => 'Стажування та практика',
            'participation_projects' => 'Участь у проектах',
            'description' => 'Опис',
            'contacts' => 'Контактні дані',
            'other' => 'інше',
            'logo' => 'Аватар',
            'file_resume' => 'Резюме',
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
}
