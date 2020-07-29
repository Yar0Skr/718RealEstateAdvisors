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
    <div class="min-height-500">
        <div align="center" class="infoImg">
            <?=Html::img('/web/uploads/info/images/'.$model->image,['alt' => $model->alt_tag])?>
        </div>
        <div style="margin-top:5px;" class = "flexBox">
            <div align="center" class = 'flex-nav'>
                <p>Read time: <?= $model->read_time ?></p>
                <p>Author: <?= $model->author ?></p>
            </div>
            <div align="center" class = 'flex-nav'>
                <p>Share</p>
                <?= \ymaker\social\share\widgets\SocialShare::widget([
                    'configurator'  => 'socialShare',
                    'url'           => Url::base(true).Yii::$app->request->url,
                    'title'         => $model->header,
                    'description'   => $model->short_info,
                    'imageUrl'      => Url::to('https://718realestateadvisors.com/web/uploads/info/images/'.$model->image, true),
                    'containerOptions' => ['tag' => ''],
                    'linkContainerOptions' => ['tag' => ''],
                ]); ?>
            </div>
        </div>

        <div class="info-body">
            <?=$model->text?>
        </div>
    </div>



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
<div align="center" class="blogLogo">
    <?=Html::img("/web/img/icons/Logo for Google.png")?>
</div>

<div class="container">
    <div class="col-sm-12">
        <div class="mm-survey">

            <div class="mm-survey-progress">
                <div class="mm-survey-progress-bar mm-progress"></div>
            </div>

            <div class="mm-survey-bottom">
                <div class="mm-survey-container">

                    <div class="mm-survey-page active" data-page="1">
                        <div class="mm-survery-content">
                            <div class="mm-survey-question">
                                <p>When Would You Like To Sell Your House?</p>
                            </div>
                            <div class="a mm-survey-item">
                                <input type="radio" id="radio01" data-item="1" name="radio1" value="red" />
                                <label for="radio01"><span></span><p>ASAP</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio02" data-item="1" name="radio1" value="blue" />
                                <label for="radio02"><span></span><p>Within a Month</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio03" data-item="1" name="radio1" value="green" />
                                <label for="radio03"><span></span><p>Within 3 Months</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio04" data-item="1" name="radio1" value="purple" />
                                <label for="radio04"><span></span><p>Didn't Decide</p></label>
                            </div>
                        </div>
                    </div>
                    <div class="mm-survey-page" data-page="2">
                        <div class="mm-survery-content">
                            <div class="mm-survey-question">
                                <p>Are you a property owner?</p>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio09" data-item="2" name="radio2" value="honda" />
                                <label for="radio09"><span></span><p>Yes, I'm the owner</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio05" data-item="2" name="radio2" value="honda" />
                                <label for="radio05"><span></span><p>Owner is deceased, I'm an heir to the estate</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio06" data-item="2" name="radio2" value="ford" />
                                <label for="radio06"><span></span><p>Other</p></label>
                            </div>
                        </div>
                    </div>
                    <div class="mm-survey-page" data-page="3">
                        <div class="mm-survery-content">
                            <div class="mm-survey-question">
                                <p>Reason To Sell</p>
                            </div>
                            <div class="a mm-survey-item">
                                <input type="radio" id="radio09" data-item="3" name="radio3" value="3" />
                                <label for="radio09"><span></span><p>Foreclosure</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio10" data-item="3" name="radio3" value="4" />
                                <label for="radio10"><span></span><p>Divorce</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio11" data-item="3" name="radio3" value="3.41" />
                                <label for="radio11"><span></span><p>Relocation</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio12" data-item="3" name="radio3" value="3.14" />
                                <label for="radio12"><span></span><p>Inheritance</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio13" data-item="3" name="radio4" value="3.14" />
                                <label for="radio12"><span></span><p>Property In Disrepair</p></label>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="mm-survey-page" data-page="5">
                        <div class="mm-survery-content">

                        </div>
                    </div>
                    <div class="mm-survey-page" data-page="6">
                        <div class="mm-survery-content">

                        </div>
                    </div>
                    <div class="mm-survey-page" data-page="7">
                        <div class="mm-survery-content">

                        </div>
                    </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div align="center">
                    <div class="mm-prev-btn">
                        <button style="display:none">Prev</button>
                    </div>
                    <div class="mm-next-btn">
                        <button style="display:none">Next</button>
                    </div>
                    <div class="mm-finish-btn">
                        <?php
                        Modal::begin([
                            'header' => '<h2 align="center">Where Should We Send Your 100% Cash Offer?</h2>',
                            'toggleButton' => [
                                'label' => 'Submit',
                                'tag' => 'button',
                                'class' => 'btn mm-finish-btn theBtn',
                            ],
                        ]);
                        ?>
                        <?php $form = ActiveForm::begin([
                            'action' => Url::toRoute('messages/send-mail')
                        ]); ?>
                        <div align="center">
                                <p>Full Name</p>
                            <input class="form-control" required name="name" type="text">
                            <br>
                            <p>Phone Number</p>
                            <input class="form-control" required name="phone" type="text">
                            <br>
                            <p>Best Email Address</p>
                            <input class="form-control" required name="mail" type="email">
                            <br>
                            <p>Your Property Address</p>
                            <input class="form-control" required name="address" type="text">
                            <br>
                            <p>ZIP Code</p>
                            <input class="form-control" required name="zip" type="text">
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Yes, Send My $Cash Offer$</button>
                            </div>

                            <p><b>Privacy Policy:</b> We Respect Your Privacy 100%. We Need Your Contact Info To Send Important Details About Your House Price</p>
                        </div>




                        <?php ActiveForm::end(); ?>

                        <?php Modal::end(); ?>
                        </p>

                    </div>
</div>

<h2 align = "center">Questions?</h2>
<h3 align = "center">Complete The Short Survey & We'll Call You Back</h3>
<h4 align = "center">We Buy Houses "As-Is"</h4>
<br>


