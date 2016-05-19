<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "another_files_in_pr".
 *
 * @property integer $id
 * @property string $name
 * @property integer $in_pr_id
 *
 * @property FormOrderInPr $inPr
 */
class AnotherFilesInPr extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'another_files_in_pr';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['in_pr_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['in_pr_id'], 'exist', 'skipOnError' => true, 'targetClass' => FormOrderInPr::className(), 'targetAttribute' => ['in_pr_id' => 'id']],
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
            'in_pr_id' => 'In Pr ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInPr()
    {
        return $this->hasOne(FormOrderInPr::className(), ['id' => 'in_pr_id']);
    }
}
