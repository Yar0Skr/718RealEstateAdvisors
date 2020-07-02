<?php

/* @var $this yii\web\View */
/* @var $content \app\models\Info */
use kv4nt\owlcarousel\OwlCarouselWidget;
use toriphes\lazyload\LazyLoad;
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
            ]
        ]);
        ?>
        
        <div class="item-class"><a href="<?=Url::toRoute('blog/selling-home-with-hpd-violations')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/HPD Building Department Violations.jpg",
                    'options'=>['alt' => 'HPD Building Department Violations']])?></a></div>
        
        <div class="item-class"><a href="<?=Url::toRoute('blog/the-ideal-strategy-to-deal-with-hpd-alternative-enforcement-program')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/AlternativeEnforcementProgram-min.jpg",
                    'options'=>['alt' => 'Alternative Enforcement Program']])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/lost-my-job-cant-pay-mortgage')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/Can't Afford Mortgage Payments.jpg",
                    'options'=>['alt' => "Can't Afford Mortgage Payments"]])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/sell-house-fast-divorce')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/Divorce.jpg",
                    'options'=>['alt' => 'Divorce']])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/dissolving-real-estate-partnership')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/Dysfunctional Partnership.jpg",
                    'options'=>['alt' => 'Dysfunctional Partnership']])?></a></div>
        
        <div class="item-class"><a href="<?=Url::toRoute('blog/selling-house-that-needs-repairs')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/Emergency Repairs.jpg",
                    'options'=>['alt' => 'Emergency Repairs']])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/selling-inherited-property')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/EstateProbateInheritance.jpg",
                    'options'=>['alt' => 'Estate Probate Inheritance']])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/selling-fire-damaged-house')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/FireWater Damage.jpg",
                    'options'=>['alt' => 'Fire/Water Damage']])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/faced-with-a-foreclosure')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/Foreclosure.jpg",
                    'options'=>['alt' => 'Foreclosure']])?></a></div>
                
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/struggling-with-guardianship')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/Guardianship.jpg",
                    'options'=>['alt' => 'Guardianship']])?></a></div>
                
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/how-to-sell-an-ugly-house')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/HPD Zombie Homes Initiative.jpg", 'options'=>['alt' => 'HPD Zombie Homes Initiative']])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/dealing-with-credit-judgments')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/Judgement.jpg",
                    'options'=>['alt' => 'Judgement']])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/need-to-sell-house-quickly')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/Need to Sell Quickly for Personal Reasons.jpg",
                    'options'=>['alt' => 'Need to Sell Quickly for Personal Reasons']])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/is-your-home-mortgage-underwater')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/Negative Equity.jpg",
                    'options'=>['alt' => 'Negative Equity']])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/dealing-with-problem-tenants')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/Problem Tenants.jpg",
                    'options'=>['alt' => 'Problem Tenants']])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/selling-house-in-disrepair')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/Property In Disrepair.jpg",
                    'options'=>['alt' => 'Property In Disrepair']])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/sell-house-fast-from-distance')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/Relocation.jpg",
                    'options'=>['alt' => 'Relocation']])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/how-to-sell-house-with-reverse-mortgage')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/Reverse Mortgage.jpg",
                    'options'=>['alt' => 'Reverse Mortgage']])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/short-sale-avoid-foreclosure')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/Short Sale.jpg",
                    'options'=>['alt' => 'Short Sale']])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/troubled-investment-property-what-is-the-best-solution')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/Troubled Investment Property.jpg",
                    'options'=>['alt' => 'Troubled Investment Property']])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/unwanted-property-selling-house-left-in-will')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/Unwanted Property On Your Name.jpg",
                    'options'=>['alt' => 'Unwanted Property On Your Name']])?></a></div>
                
        <div class="item-class"><a href="<?=Url::toRoute('blog/facing-auction-sale-due-to-mortgage-foreclosure')?>">
                <?=LazyLoad::widget(['src'=>"/web/img/layouts/Upcoming Auction.jpg",
                    'options'=>['alt' => 'Upcoming Auction']])?></a></div>




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