<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Estates */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estates-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'callback_date')->textInput() ?>

    <?= $form->field($model, 'callback_time')->textInput() ?>

    <?= $form->field($model, 'own_years')->textInput() ?>

    <?= $form->field($model, 'is_primary')->textInput() ?>

    <?= $form->field($model, 'rental_price')->textInput() ?>

    <?= $form->field($model, 'is_occupied')->textInput() ?>

    <?= $form->field($model, 'can_vacate')->textInput() ?>

    <?= $form->field($model, 'bedrooms')->textInput() ?>

    <?= $form->field($model, 'bathrooms')->textInput() ?>

    <?= $form->field($model, 'needs_repairing')->textInput() ?>

    <?= $form->field($model, 'renovation_year')->textInput() ?>

    <?= $form->field($model, 'has_mortgage')->textInput() ?>

    <?= $form->field($model, 'mortgage_amount')->textInput() ?>

    <?= $form->field($model, 'has_taxes')->textInput() ?>

    <?= $form->field($model, 'tax_amount')->textInput() ?>

    <?= $form->field($model, 'is_only')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'is_delete')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
