<?php

/* @var $this yii\web\View */

use kv4nt\owlcarousel\OwlCarouselWidget;
use yii\helpers\Html;

$this->title = 'Common reasons to sell property';
$this->params['breadcrumbs'][] = $this->title;
?>
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
            'items'             => 1,
            'loop'              => true,
            'dots' => false,
        ]
    ]);
    ?>
    <div class="item-class"><img src="/img/layouts/header.png" alt="Image 1"></div>
    <div class="item-class"><img src="/img/layouts/header.png" alt="Image 1"></div>
    <div class="item-class"><img src="/img/layouts/header.png" alt="Image 1"></div>
    <?php OwlCarouselWidget::end(); ?>
</div>
<div class="Reasons-body">
    <div class="container white">
        <div class="navigaonusing">
            <div class="gaonutosal">
                <div class="pesontedan">
                    <input id="pesontedan-one" type="checkbox" name="pesontedans">
                    <label for="pesontedan-one">Negative Equity</label>
                    <div class="pesontedan-content">
                        <h3>What is Negative Equity?</h3>
                           <p>Negative equity, or an underwater mortgage, is a circumstance where the debt due on a home mortgage is higher than the value of the said home. As long as the mortgage holder makes the monthly payments and has no plans to move, it is not a pressing problem. Challenges arise when the homeowner needs or wants to sell the home. Some productive solutions exist to make the sale a reality.</p></div>
                </div>
                <div class="pesontedan">
                    <input id="pesontedan-two" type="checkbox" name="pesontedans">
                    <label for="pesontedan-two">Problem Tenants</label>
                    <div class="pesontedan-content">
                        <p>If you are a landlord with bad tenants, you probably feel like you’re stuck. Are you stuck in a powerless position because you can’t sell your property, but no income is coming in either? Bad tenants might not pay their rent, they may destroy your property, and you will most likely have to perform tons of renovations once they depart. Fortunately for you, we offer a solution to that problem; we buy homes and income properties in cash. As cash investors, we will move quickly and take your property off of your hands, relieving you of all the stress that comes along with being a landlord.</p>
                    </div>
                </div>
                <div class="pesontedan">
                    <input id="pesontedan-three" type="checkbox" name="pesontedans">
                    <label for="pesontedan-three">Upcoming auction</label>
                    <div class="pesontedan-content">
                    </div>
                </div>
                <div class="pesontedan">
                    <input id="pesontedan-four" type="checkbox" name="pesontedans">
                    <label for="pesontedan-four">Reverse Mortgage</label>
                    <div class="pesontedan-content">
                        <p>A reverse mortgage is an advance accessible to property holders, 62 years or older, that enables them to convert a piece of the value in their homes into cash.</p>
                        <p>The item was considered as a way to assist retirees with limited income to use the accumulated wealth in their homes to cover necessary living expenses and pay for health care. In any case, there is no limitation on how reverse mortgage proceeds can be used.</p>
                    </div>
                </div>
                <div class="pesontedan">
                    <input id="pesontedan-five" type="checkbox" name="pesontedans">
                    <label for="pesontedan-five">Emergency Repairs</label>
                    <div class="pesontedan-content">
                    </div>
                </div>
            </div>
        </div>
    </div>
