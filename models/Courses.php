<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "courses".
 *
 * @property integer $Id
 * @property string $name
 * @property string $courses
 * @property string $lecture
 */
class Courses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'courses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'name', 'courses', 'lecture'], 'required'],
            [['Id'], 'integer'],
            [['name', 'lecture'], 'string', 'max' => 20],
            [['courses'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'name' => 'Name',
            'courses' => 'Courses',
            'lecture' => 'Lecture',
        ];
    }
}
