<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vacancy".
 *
 * @property integer $id
 * @property string $name
 * @property integer $fid
 *
 * @property TableCandVac[] $tableCandVacs
 * @property FormOfferVacEmp $f
 */
class Vacancy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vacancy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fid'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['fid'], 'exist', 'skipOnError' => true, 'targetClass' => FormOfferVacEmp::className(), 'targetAttribute' => ['fid' => 'id']],
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
            'fid' => 'Fid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTableCandVacs()
    {
        return $this->hasMany(TableCandVac::className(), ['vid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getF()
    {
        return $this->hasOne(FormOfferVacEmp::className(), ['id' => 'fid']);
    }
}
