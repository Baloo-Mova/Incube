<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "performer_project".
 *
 * @property integer $id
 * @property string $name
 * @property string $adress
 * @property integer $ipid
 *
 * @property FormOrderInPr $ip
 */
class PerformerProject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'performer_project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adress'], 'string'],
            [['ipid'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['ipid'], 'exist', 'skipOnError' => true, 'targetClass' => FormOrderInPr::className(), 'targetAttribute' => ['ipid' => 'id']],
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
            'adress' => 'Adress',
            'ipid' => 'Ipid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIp()
    {
        return $this->hasOne(FormOrderInPr::className(), ['id' => 'ipid']);
    }
}
