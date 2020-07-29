<?php

/* @var $this yii\web\View */
/* @var $title \app\models\LayoutTitle */

use toriphes\lazyload\LazyLoad;
use yii\helpers\Html;

if (!empty($title)){
    $this->title = $title->title;
} else {
    $this->title = 'Our Services';
}
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    body{
        background-color: #ebebeb;
    }
</style>
<div style=" height:auto;">
    <div style="margin-bottom:20px" class="container bigServices">
        <div style="color: #014a73;"align="center"><h1>OUR SERVICES</h1></div>
        <div class="row">
            <div class="col-sm-12 col-md-3 services">
                <div>
                    <?=LazyLoad::widget(['src'=>'/web/img/icons/services1.png','options'=>['alt' => "Looking to sell a property fast?"]])?>
                </div>
                <div class = "smallServices">
                    <h4>LOOKING TO SELL A PROPERTY FAST?</h4>
                    <p>Sell your house within days, any condition.</p>
                    <p> Whether your property is in excellent condition or barely standing, vacant or rented to tenants, paying rent or non-paying. </p>
                    <p>With us, you choose when to sell your house, in days, weeks or months. </p>
                    <p>We accommodate all your needs and make the selling experience pleasant for you.</p>
                    <a href="tel:6462879111"><p>Call us for a fair all-cash offer.</p></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 services">
                <div>
                    <?=LazyLoad::widget(['src'=>'/web/img/icons/services2.png','options'=>['alt' => "Variety of properties"]])?>
                </div>
                <div class = "smallServices">
                    <h4>VARIETY OF PROPERTIES</h4>
                    <p>We purchase a wide range of properties, single-family to multi-family, co-ops and condos, vacant land, and commercial units – we buy them all.</p>
                    <p>We can help if your property is distressed, and we can assist you with foreclosure solutions. In case there was a death, divorce, or any other family crisis, we can advise on how to proceed in accordance with your specific property.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 services">
                <div>
                    <?=LazyLoad::widget(['src'=>'/web/img/icons/services3.png','options'=>['alt' => "Don't spend a dime"]])?>
                </div>
                <div class = "smallServices">
                    <h4>DONT SPEND A DIME</h4>
                    <p>When you work with us, there are no brokers to be paid, which means all the money goes in your pocket. It also means that you won’t be waiting for months until a real estate agent finds you a buyer that can afford the property.</p>
                    <p>We’re not scared of an ugly house, so you never have to spend money on improvements.</p>
                    <p>We can help you find an attorney if you don’t have one and need someone trustworthy to represent you.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 services">
                <div>
                    <?=LazyLoad::widget(['src'=>'/web/img/icons/services4.png','options'=>['alt' => "We pay top finders fee"]])?>
                </div>
                <div class = "smallServices">
                    <h4>WE PAY TOP FINDER'S FEE </h4>
                    <p>We pay commissions to anybody who finds us a house to buy, whether you are an agent, an attorney, a friend, or just a guy who wavered across a for sale sign.</p>
                    <p>We will pay you the top finder’s fee if we purchase the property you introduced us to.</p>
                </div>
            </div>
        </div>
    </div>
</div>
