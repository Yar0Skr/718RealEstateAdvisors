<?php

/* @var $this yii\web\View */
/* @var $title \app\models\LayoutTitle */

use yii\helpers\Html;

if (!empty($title)){
    $this->title = $title->title;
} else {
    $this->title = 'Our Process';
}

$this->params['breadcrumbs'][] = $this->title;
?>
<div style="background-color: #ebebeb">
    <div class="container">
        <div class="row ">
            <br>
            <h1 align="center" style="color:#014a73;">OUR PROCESS</h1>
            <br>
            <div align="center" class="col-12 col-md-2 col-md-offset-1">
                <div class="circle">
                    <p>1</p>
                </div>
                <br>
                <p>Tell us about your property</p>
                <br>
                </div>
                <div align="center" class="col-12 col-md-2">
                    <div class="circle">
                        <p>2</p>
                    </div>
                    <br>
                    <p>If it meets our criteria, we will set up a quick appointment with you to visit your property.</p>
                    <br>
                </div>
            <div align="center" class="col-12 col-md-2">
                <div class="circle">
                    <p>3</p>
                </div>
                <br>
                <p>We’ll present you with a fair written, no-obligation offer.</p>
                <br>
            </div>
            <div align="center" class="col-12 col-md-2">
                <div class="circle">
                    <p>4</p>
                </div>
                <br>
                <p>We will discuss your wants and needs and arrange terms that  suit you best. </p>
                <br>
            </div>
            <div align="center" class="col-12 col-md-2">
                <div class="circle">
                    <p>5</p>
                </div>
                <br>
                <p>We schedule
                    a closing at
                    a convenient time
                    and place where
                    YOU GET PAID!</p>
                <br>
            </div>
        </div>
    </div>
</div>
<div class="wwwu">
    <div class="container">
        <div style="color: white" class="row">
            <br>
            <h1 align="center">WHY WORK WITH US</h1>
            <br>
            <div align="center" class="col-12 col-md-3">
                <?=Html::img("/web/img/icons/Layer 19.png")?>
                <br>
                <h3>PROFESSIONALISM</h3>
                <p>We are a humble team of Real Estate experts who will display the highest level of professionalism and individual attention to details.</p>
                <br>
            </div>
            <div align="center" class="col-12 col-md-3">
                <?=Html::img("/web/img/icons/Layer 20.png")?>
                <br>
                <h3>EXPERIENCE</h3>
                <p>We are well experienced and have been helping homeowners in New York Metro area in all market conditions. We have seen the good, the bad and the ugly. </p>
                <br>
            </div>
            <div align="center" class="col-12 col-md-3">
                <?=Html::img("/web/img/icons/Layer 18.png")?>
                <br>
                <h3>PROVEN SOLUTIONS</h3>
                <p>We provide our clients complete information on how to sell houses and handle other real estate associated matters.</p>
                <br>
            </div>
            <div align="center" class="col-12 col-md-3">
                <?=Html::img("/web/img/icons/Layer 17.png")?>
                <br>
                <h3>SERVICE</h3>
                <p>We believe in giving top
                    priority to our clients and
                    providing them with the best
                    service and courtesy.</p>
                <br>
                </div>
        </div>
    </div>
</div>




