<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subscribers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subscribers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email_Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Gendere')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
