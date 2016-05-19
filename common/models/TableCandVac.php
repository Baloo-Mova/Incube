<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "table_cand_vac".
 *
 * @property integer $id
 * @property integer $vid
 * @property integer $cid
 *
 * @property Vacancy $v
 * @property FormCandVacEmp $c
 */
class TableCandVac extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'table_cand_vac';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vid', 'cid'], 'integer'],
            [['vid'], 'exist', 'skipOnError' => true, 'targetClass' => Vacancy::className(), 'targetAttribute' => ['vid' => 'id']],
            [['cid'], 'exist', 'skipOnError' => true, 'targetClass' => FormCandVacEmp::className(), 'targetAttribute' => ['cid' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vid' => 'Vid',
            'cid' => 'Cid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getV()
    {
        return $this->hasOne(Vacancy::className(), ['id' => 'vid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getC()
    {
        return $this->hasOne(FormCandVacEmp::className(), ['id' => 'cid']);
    }
}
