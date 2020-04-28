<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')
        ->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')
        ->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')
        ->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auth_type')
        ->dropDownList(['1' => 'Admin', '2' => 'Support'])
        ->label('Permissions') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
