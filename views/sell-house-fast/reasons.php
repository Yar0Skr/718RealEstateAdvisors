<?php
/* @var $title \app\models\LayoutTitle */

/* @var $this yii\web\View */
/* @var $content \app\models\Info */
use kv4nt\owlcarousel\OwlCarouselWidget;
use toriphes\lazyload\LazyLoad;
use yii\helpers\Html;
use yii\helpers\Url;

if (!empty($title)){
    $this->title = $title->title;
} else {
    $this->title = 'Common reasons to sell property';

}
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    body{
        background-color: #ebebeb;
    }
</style>
<div style="padding: 15px" class="container">
    <div align="center"><h1>Common Reasons To Sell Property</h1></div>
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
                'lazyLoad'          => true,
                'lazyLoadEager'     => 2,
                'margin'            => 20,
            ]
        ]);
        ?>

        <div class="item-class"><a href="<?=Url::toRoute('blog/selling-home-with-hpd-violations')?>">
                <?=Html::img("/web/img/layouts/HPD Building Department Violations.jpg",
                ['alt' => 'HPD Building Department Violations'])?></a></div>
        
        <div class="item-class"><a href="<?=Url::toRoute('blog/the-ideal-strategy-to-deal-with-hpd-alternative-enforcement-program')?>">
                <?=Html::img("/web/img/layouts/AlternativeEnforcementProgram-min.jpg",
                ['alt' => 'Alternative Enforcement Program'])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/lost-my-job-cant-pay-mortgage')?>">
                <?=Html::img("/web/img/layouts/Can't Afford Mortgage Payments.jpg",
                ['alt' => "Can't Afford Mortgage Payments"])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/sell-house-fast-divorce')?>">
                <?=Html::img("/web/img/layouts/Divorce.jpg",
                ['alt' => 'Divorce'])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/dissolving-real-estate-partnership')?>">
                <?=Html::img("/web/img/layouts/Dysfunctional Partnership.jpg",
                ['alt' => 'Dysfunctional Partnership'])?></a></div>
        
        <div class="item-class"><a href="<?=Url::toRoute('blog/selling-house-that-needs-repairs')?>">
                <?=Html::img("/web/img/layouts/Emergency Repairs.jpg",
                ['alt' => 'Emergency Repairs'])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/selling-inherited-property')?>">
                <?=Html::img("/web/img/layouts/EstateProbateInheritance.jpg",
                ['alt' => 'Estate Probate Inheritance'])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/selling-fire-damaged-house')?>">
                <?=Html::img("/web/img/layouts/FireWater Damage.jpg",
                ['alt' => 'Fire/Water Damage'])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/faced-with-a-foreclosure')?>">
                <?=Html::img("/web/img/layouts/Foreclosure.jpg",
                ['alt' => 'Foreclosure'])?></a></div>
                
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/struggling-with-guardianship')?>">
                <?=Html::img("/web/img/layouts/Guardianship.jpg",
                ['alt' => 'Guardianship'])?></a></div>
                
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/how-to-sell-an-ugly-house')?>">
                <?=Html::img("/web/img/layouts/HPD Zombie Homes Initiative.jpg", ['alt' => 'HPD Zombie Homes Initiative'])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/dealing-with-credit-judgments')?>">
                <?=Html::img("/web/img/layouts/Judgement.jpg",
                ['alt' => 'Judgement'])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/need-to-sell-house-quickly')?>">
                <?=Html::img("/web/img/layouts/Need to Sell Quickly for Personal Reasons.jpg",
                ['alt' => 'Need to Sell Quickly for Personal Reasons'])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/is-your-home-mortgage-underwater')?>">
                <?=Html::img("/web/img/layouts/Negative Equity.jpg",
                ['alt' => 'Negative Equity'])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/dealing-with-problem-tenants')?>">
                <?=Html::img("/web/img/layouts/Problem Tenants.jpg",
                ['alt' => 'Problem Tenants'])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/selling-house-in-disrepair')?>">
                <?=Html::img("/web/img/layouts/Property In Disrepair.jpg",
                ['alt' => 'Property In Disrepair'])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/sell-house-fast-from-distance')?>">
                <?=Html::img("/web/img/layouts/Relocation.jpg",
                ['alt' => 'Relocation'])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/how-to-sell-house-with-reverse-mortgage')?>">
                <?=Html::img("/web/img/layouts/Reverse Mortgage.jpg",
                ['alt' => 'Reverse Mortgage'])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/short-sale-avoid-foreclosure')?>">
                <?=Html::img("/web/img/layouts/Short Sale.jpg",
                ['alt' => 'Short Sale'])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/troubled-investment-property-what-is-the-best-solution')?>">
                <?=Html::img("/web/img/layouts/Troubled Investment Property.jpg",
                ['alt' => 'Troubled Investment Property'])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/unwanted-property-selling-house-left-in-will')?>">
                <?=Html::img("/web/img/layouts/Unwanted Property On Your Name.jpg",
                ['alt' => 'Unwanted Property On Your Name'])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/facing-auction-sale-due-to-mortgage-foreclosure')?>">
                <?=Html::img("/web/img/layouts/Upcoming Auction.jpg",
                ['alt' => 'Upcoming Auction'])?></a></div>




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
                                            <?=LazyLoad::widget(['src'=>'/web/uploads/info/images/'.$element->image, 'options'=>['alt'=>$element->alt_tag]])?>
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