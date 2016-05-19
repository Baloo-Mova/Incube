<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "files_for_form_offer_project".
 *
 * @property integer $id
 * @property string $name
 * @property integer $pid
 *
 * @property FormOfferProject $p
 */
class FilesForFormOfferProject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'files_for_form_offer_project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'pid'], 'required'],
            [['pid'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['pid'], 'exist', 'skipOnError' => true, 'targetClass' => FormOfferProject::className(), 'targetAttribute' => ['pid' => 'id']],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getP()
    {
        return $this->hasOne(FormOfferProject::className(), ['id' => 'pid']);
    }
}
