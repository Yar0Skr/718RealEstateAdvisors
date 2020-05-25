<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Info */
/* @var $infoImagesModel app\models\InfoImages */
/* @var $infoMetaTagsModel app\models\InfoMetatags */
/* @var $form yii\widgets\ActiveForm */

$infoMetaTagsModel = new \app\models\InfoMetatags();
?>

<div class="info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'header')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

        <?=$form->field($model, 'image')->widget(FileInput::classname(), [
            'options' => ['multiple'=>false, 'accept' => 'image/*'],
            'pluginOptions'=>[
                'initialPreview'=>[
                    $model->image ? '/uploads/info/images/'.$model->image : null,
                ],
                'initialPreviewShowDelete' => false,
                'initialPreviewAsData'=>true,
                'initialCaption'=>$model->image,
                'showDrag' => false,
                'showRemove' => false,
                'showUpload' => false,
                'overwriteInitial',
            ]
        ]);
        ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
