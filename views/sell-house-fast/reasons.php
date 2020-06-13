<?php

/* @var $this yii\web\View */
/* @var $content \app\models\Info */
use kv4nt\owlcarousel\OwlCarouselWidget;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Common reasons to sell property';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    body{
        background-color: #ebebeb;
    }
</style>
<div style="padding: 15px" class="container">
    <div align="center"><h1>Reasons To Sell Property</h1></div>
    <div>
        <?php
        OwlCarouselWidget::begin([
            'container' => 'div',
            'containerOptions' => [
                'id' => 'Reasons-body',
                'class' => 'owl'
            ],
            'pluginOptions'    => [
                'autoplay'          => true,
                'autoplayTimeout'   => 3000,
                'items'             => 3,
                'loop'              => true,
                'dots'              => false,
            ]
        ]);
        ?>
        <div class="item-class"><a href="<?=Url::toRoute('blog/dealing-with-credit-judgments')?>"><?=Html::img("/web/img/layouts/1.jpg")?></a></div>
        <div class="item-class"><a href="<?=Url::toRoute('/blog/selling-inherited-property')?>"><?=Html::img("/web/img/layouts/inheritance.jpg")?></a></div>
        <div class="item-class"><a href="<?=Url::toRoute('/blog/selling-fire-damaged-house')?>"><?=Html::img("/web/img/layouts/damage.jpg")?></a></div>
        <div class="item-class"><a href="<?=Url::toRoute('/blog/lost-my-job-cant-pay-mortgage')?>"><?=Html::img("/web/img/layouts/afford.jpg")?></a></div>
        <div class="item-class"><a href="<?=Url::toRoute('/blog/is-your-home-mortgage-underwater')?>"><?=Html::img("/web/img/layouts/negative.jpg")?></a></div>
        <div class="item-class"><a href="<?=Url::toRoute('/blog/dissolving-real-estate-partnership')?>"><?=Html::img("/web/img/layouts/dysfunctional.jpg")?></a></div>
        <div class="item-class"><a href="<?=Url::toRoute('blog/sell-house-fast-divorce')?>"><?=Html::img("/web/img/layouts/divorce.jpg")?></a></div>
        <div class="item-class"><a href="<?=Url::toRoute('/blog/selling-house-that-needs-repairs')?>"><?=Html::img("/web/img/layouts/repairs.jpg")?></a></div>


        <?php OwlCarouselWidget::end(); ?>
    </div>
</div>

<div class="Reasons-body">
    <div class="container white">
        <div class="navigaonusing">
            <div class="gaonutosal">
                <?php foreach ($content as $element){ ?>
                    <div class="pesontedan">
                        <input id="pesontedan-<?=$element->id?>" type="checkbox" name="pesontedans">
                        <label for="pesontedan-<?=$element->id?>"><?=$element->header?></label>
                        <div class="pesontedan-content">
                            <?php if ($element->image != null){?>
                                <div style="margin:20px" class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div align="center" style="padding-top:20px" class="image">
                                            <?=Html::img('/web/uploads/info/images/'.$element->image,['alt' => $element->alt_tag])?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p style="margin-bottom:0px"><?=$element->short_info?></p>
                                    </div>
                                </div>
                                <div style="margin:20px" class="row">
                                    <div align="center" class="col-12">
                                        <div>
                                            <a href="<?=Url::toRoute('/blog/'.$element->url_name)?>"><button class="send-btn smallBtn">Read more</button></a>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div style="margin:20px" class="row">
                                    <div class="col-12">
                                        <p style="margin-bottom:0px"><?=$element->short_info?></p>
                                    </div>
                                </div>
                                <div style="margin:20px" class="row">
                                    <div align="center" class="col-12">
                                        <div>
                                            <a href="<?=Url::toRoute('/blog/'.$element->url_name)?>"><button class="send-btn smallBtn">Read more</button></a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>