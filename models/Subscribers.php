<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subscribers".
 *
 * @property integer $id
 * @property string $Name
 * @property string $Email_Address
 * @property string $Gendere
 * @property string $Address
 */
class Subscribers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subscribers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Email_Address', 'Gendere', 'Address'], 'required'],
            [['Name', 'Email_Address', 'Address'], 'string', 'max' => 200],
            [['Gendere'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'Name' => Yii::t('app', 'Name'),
            'Email_Address' => Yii::t('app', 'Email  Address'),
            'Gendere' => Yii::t('app', 'Gendere'),
            'Address' => Yii::t('app', 'Address'),
        ];
    }
}
