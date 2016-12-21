<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $Id
 * @property string $Name
 * @property string $Email_Address
 * @property string $Gender
 * @property string $Address
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Email_Address', 'Gender', 'Address'], 'required'],
            [['Name', 'Email_Address', 'Address'], 'string', 'max' => 200],
            [['Gender'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => Yii::t('app', 'ID'),
            'Name' => Yii::t('app', 'Name'),
            'Email_Address' => Yii::t('app', 'Email  Address'),
            'Gender' => Yii::t('app', 'Gender'),
            'Address' => Yii::t('app', 'Address'),
        ];
    }
}
