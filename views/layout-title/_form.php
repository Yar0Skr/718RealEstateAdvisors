<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LayoutTitle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="layout-title-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'page_id')->dropDownList([
        '1'=>'Home',
        '2'=>'Common Reasons',
        '3'=>'Our Process',
        '4'=>'Our Services',
        '5'=>'FAQ',
    ]) ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
