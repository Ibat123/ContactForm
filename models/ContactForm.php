<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $FullName;
    public $Gender;
    public $DOB;
    public $Years_Of_Experience;
    public $Industry;
    public $Location;
    public $AboutMe;
    public $ProfilePicture;
    public $Professional_title;
    public $Career_Level;
    public $Communication_level;
    public $Organizational_level;
    public $Job_Related_level;
    public $Address;
    public $Phone_Number;
    public $Website;
    public $email;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['FullName', 'Gender','DOB', 'Address','Years_Of_Experience'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
//			[[DOB],'default','value'=>null],
			//[[Years_Of_Experience]'default','value'=>null],
			
			
			
            // verifyCode needs to be entered correctly
            
        ],
	}
    }

    /**
     * @return array customized attribute labels
     *
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }
 */
    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}
