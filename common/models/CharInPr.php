<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "char_in_pr".
 *
 * @property integer $id
 * @property string $name
 * @property string $type
 * @property string $st_level
 * @property string $newness
 * @property string $nat_imp
 * @property string $result
 * @property integer $ipid
 *
 * @property FormOrderInPr $ip
 */
class CharInPr extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'char_in_pr';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['result'], 'string'],
            [['ipid'], 'integer'],
            [['name', 'type', 'st_level', 'newness', 'nat_imp'], 'string', 'max' => 255],
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
            'type' => 'Type',
            'st_level' => 'St Level',
            'newness' => 'Newness',
            'nat_imp' => 'Nat Imp',
            'result' => 'Result',
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
