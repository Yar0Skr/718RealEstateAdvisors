<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$model = new \app\models\Estates();
$this->title = 'Success';
?>
<div class="container">
    <div class="site-error">

        <h1><?= Html::encode($this->title) ?></h1>

        <div class="alert alert-success">
            Your message was sent
        </div>

        <p>
            Would you like to share more information about your estate?
        </p>
        <p>

            <?php
            Modal::begin([
                'header' => '<h2>Estate info</h2>',
                'toggleButton' => [
                    'label' => 'Share info',
                    'tag' => 'button',
                    'class' => 'btn btn-success',
                ],
            ]);
            ?>
            <?php $form = ActiveForm::begin([
                    'id' => 'contact-form',
                    'action'=>Url::toRoute('estates/post-create')
            ]); ?>

            <?= $form->field($model, 'callback_date')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'callback_time') ?>

            <?= $form->field($model, 'own_years') ?>

            <?= $form->field($model, 'is_primary')?>

            <?= $form->field($model, 'rental_price') ?>

            <?= $form->field($model, 'is_occupied') ?>

            <?= $form->field($model, 'can_vacate')?>

            <?= $form->field($model, 'bedrooms') ?>

            <?= $form->field($model, 'bathrooms') ?>

            <?= $form->field($model, 'needs_repairing')?>

            <?= $form->field($model, 'renovation_year') ?>

            <?= $form->field($model, 'has_mortgage') ?>

            <?= $form->field($model, 'mortgage_amount')?>

            <?= $form->field($model, 'has_taxes') ?>

            <?= $form->field($model, 'tax_amount') ?>

            <?= $form->field($model, 'is_only')?>

            <?= $form->field($model, 'address') ?>

            <?= $form->field($model, 'comment') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>

        <?php Modal::end(); ?>
        </p>

    </div>

</div>
