<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use app\models\ContactForm;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

$this->title = 'Basic Info';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.
            Thank you.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'FullName')->textInput(['autofocus' => true]) ?>
					<?php
    $a= ['Male' => 'Male','Female' => 'Female', ];
    echo $form->field($model, 'Gender',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-6',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>
					 
<?= $form->field($model, 'DOB')->widget(\yii\jui\DatePicker::classname(), [
                              'dateFormat' => 'yyyy-MM-dd',
]) ?>
<?php
    $a= ['5' => '5','10' => '10','25'=>'25','30'=> '30' ];
    echo $form->field($model, 'Years_Of_Experience',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-6',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>
<?php
    $a= ['KINGSTON' => 'KINGSTON','MANDEVILLE' => 'MANDEVILLE','MONTEGO BAY'=>'MONTEGO BAY','WESTMORELAND'=> 'WESTMORELAND' ];
    echo $form->field($model, 'Location',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-6',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>




					   
                       <?= $form->field($model, 'Industry')->dropDownList(['MEDICAL'  => 'MEDICAL','ICT' => 'ICT', 'EDUCATION' => 'EDUCATION','FINACIAL'  => 'FINACIAL']); ?> 
					     <?= $form->field($model, 'AboutMe')->textArea(['autofocus' => true]) ?>
						 
						 
						 
  <legend>Skills:</legend>
                 <?= $form->field($model, 'Professional_title')->dropDownList([ 'SELECT'=>'SELECT','DR' => 'DR', 'MP' => 'MP', 'REVERED'=> 'REVERED']) ?>
                 <?= $form->field($model, 'Career_Level')->dropDownList(['SELECT'=>'SELECT','JUNIOR LEVEL' => 'JUNIOR LEVEL', 'SENIOR LEVEL' => 'SENIOR LEVEL', 'EXECUTIVE LEVEL'=> 'EXECUTIVE LEVEL']) ?>
				 <?= $form->field($model, 'Communication_level')->dropDownList(['SELECT'=>'SELECT','1-10%' => '1-10%', '21-30%'=>'21-30%','50%'=>'50%','70%'=>'70%', '90-100%'=>'90-100%' ]) ?>
				 <?= $form->field($model, 'Organizational_level')->dropDownList(['SELECT'=>'SELECT','1-10%' => '1-10%', '21-30%'=>'21-30%','50%'=>'50%','70%'=>'70%', '90-100%'=>'90-100%']) ?>
				 <?= $form->field($model, 'Job_Related_level')->dropDownList(['SELECT'=>'SELECT','1-10%' => '1-10%', '21-30%'=>'21-30%','50%'=>'50%','70%'=>'70%', '90-100%'=>'90-100%' ]) ?>
				 
 <legend>Contact:</legend>		
 
				<?= $form->field($model, 'Address')->textArea(['autofocus' => true]) ?>
				<?= $form->field($model, 'Phone_Number', [
        'inputOptions' => [
            'placeholder' => '1876',
        ],
    ]); ?>
				
				
				
                  
                    <?= $form->field($model, 'Website')->textArea(['autofocus' => true]) ?>				  
				 

                    <?= $form->field($model, 'email') ?>

                    
                    
                   

                     
                     
                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
	