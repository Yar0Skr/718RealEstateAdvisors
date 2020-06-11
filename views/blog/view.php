<?php

use kartik\file\FileInput;
use kv4nt\owlcarousel\OwlCarouselWidget;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Info */
$prevModel=\app\models\Info::findOne(['id'=>$model->id + 1]);
$nextModel=\app\models\Info::findOne(['id'=>$model->id + 1]);

$this->title = $model->header;
$this->params['breadcrumbs'][] = ['label' => 'Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$metaTags = \app\models\InfoMetatags::find()->where(['info_id'=>$model->id])->all();
foreach ($metaTags as $meta){
    $this->registerMetaTag(['name'=>$meta->name,'content'=>$meta->content]);
}

\yii\web\YiiAsset::register($this);

preg_match('~>(.*?)<~', $model->text, $output);
?>

<div class="container">
    <div class="info-view">
        <div align="center">
            <h1><?= $output[1] ?></h1>
                <?php if(!Yii::$app->user->isGuest){
                if(Yii::$app->user->identity->auth_type == 1){
                    $uploadOwlModel = new \app\models\InfoImages();
                    $uploadMetaModel = new \app\models\InfoMetatags();?>
            <p>
                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
                <?php
                    Modal::begin([
                        'header' => '<h2>MetaTag</h2>',
                        'toggleButton' => [
                            'label' => 'Add MetaTag',
                            'tag' => 'button',
                            'class' => 'btn btn-warning',
                        ],
                    ]);
                    ?>
                        <?php $form = ActiveForm::begin([
                            'id' => 'contact-form',
                        ]); ?>
                        <?= $form->field($uploadMetaModel, 'info_id')->hiddenInput(['value' => $model->id])->label(false); ?>
                        <?= $form->field($uploadMetaModel, 'name')->textInput(['autofocus' => true]) ?>
                        <?= $form->field($uploadMetaModel, 'content')->textInput(['autofocus' => true]) ?>
                            <div class="form-group">
                                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                            </div>

                         <?php ActiveForm::end(); ?>

                    <?php Modal::end(); ?>

                    <?php
                    Modal::begin([
                        'header' => '<h2>Image</h2>',
                        'toggleButton' => [
                            'label' => 'Add Image to Carousel',
                            'tag' => 'button',
                            'class' => 'btn btn-success',
                        ],
                    ]);
                    ?>
                    <?php $form = ActiveForm::begin(); ?>
                    <?= $form->field($uploadOwlModel, 'info_id')->hiddenInput(['value' => $model->id])->label(false); ?>

                    <?=$form->field($uploadOwlModel, 'image')->widget(FileInput::classname(), [
                        'options' => ['multiple'=>false, 'accept' => 'image/*'],
                        'pluginOptions'=>[
                            'initialPreviewShowDelete' => false,
                            'initialPreviewAsData'=>true,
                            'showDrag' => false,
                            'showRemove' => false,
                            'showUpload' => true,
                            'overwriteInitial',
                        ]
                    ])->label(false);
                    ?>
                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                    <?php Modal::end(); ?>


                    </p>
            <?php }
            } ?>

        </div>
    </div>
    <div align="center" class="infoImg">
        <?=Html::img('/web/uploads/info/images/'.$model->image)?>
    </div>
    <div class="info-body">
        <p><?=$model->text?></p>
    </div>
    <?= \ymaker\social\share\widgets\SocialShare::widget([
        'configurator' => 'socialShare',
        'url'          => \yii\helpers\Url::to('absolute/route/to/page', true),
        'title'        => 'Title of the page',
        'description'  => 'Description of the page...',
        'imageUrl'     => \yii\helpers\Url::to('absolute/route/to/image.png', true),
    ]); ?>

    <?php
    OwlCarouselWidget::begin([
        'container' => 'div',
        'containerOptions' => [
            'id' => 'container-id',
            'class' => 'owl'
        ],
        'pluginOptions'    => [
            'autoplay'          => true,
            'autoplayTimeout'   => 5000,
            'items'             => 1,
            'loop'              => true,
        ]
    ]);
    ?>
<?php
    $images = \app\models\InfoImages::find()->where(['info_id'=>$model->id])->all();
    if(!empty($images)){
        foreach ($images as $image) { ?>
        <div class="item-class"><?=Html::img('/web/uploads/info/owl/'.$image->image)?></div>
        <?php }
    }
    ?>

    <?php OwlCarouselWidget::end(); ?>
</div>
