<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EstatesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estates-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'callback_date') ?>

    <?= $form->field($model, 'callback_time') ?>

    <?= $form->field($model, 'own_years') ?>

    <?= $form->field($model, 'is_primary') ?>

    <?php // echo $form->field($model, 'rental_price') ?>

    <?php // echo $form->field($model, 'is_occupied') ?>

    <?php // echo $form->field($model, 'can_vacate') ?>

    <?php // echo $form->field($model, 'bedrooms') ?>

    <?php // echo $form->field($model, 'bathrooms') ?>

    <?php // echo $form->field($model, 'needs_repairing') ?>

    <?php // echo $form->field($model, 'renovation_year') ?>

    <?php // echo $form->field($model, 'has_mortgage') ?>

    <?php // echo $form->field($model, 'mortgage_amount') ?>

    <?php // echo $form->field($model, 'has_taxes') ?>

    <?php // echo $form->field($model, 'tax_amount') ?>

    <?php // echo $form->field($model, 'is_only') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'is_delete') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
