<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class Registration extends Model
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
   


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
		
           // name, email, subject and body are required
            [['FullName', 'Gender', 'DOB', 'Address','Years_Of_Experience','Industry','Location','AboutMe', 'Professional_title', 'Career_Level', 'Communication_level',
			'Organizational_level', 'Job_Related_level', 'Phone_Number', 'Website'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
			//[[DOB],'default','value'=>null],
			//[[Years_Of_Experience],'default','value'=>null],
			//[[Industry],'default','value'=>null],
			//[[Location],'default','value'=>null],
			//[[AboutMe],'default','value'=>null],
			//[[ProfilePicture],'default','value'=>null],
			//[[Professional_title],'default','value'=>null],
			//[[Career_Level],'default','value'=>null],
			//[[Communication_level],'default','value'=>null],
			//[[Organizational_level],'default','value'=>null],
			//[[Job_Related_level],'default','value'=>null],
			//[[Address],'default','value'=>null],
			//[[Phone_Number],'default','value'=>null],
			//[[Website],'default','value'=>null],
            
        ];
    }
}