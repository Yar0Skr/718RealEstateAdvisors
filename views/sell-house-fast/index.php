<?php
use kv4nt\owlcarousel\OwlCarouselWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use pa3py6aka\yii2\ModalAlert;
/* @var $this yii\web\View */
/* @var $title \app\models\LayoutTitle */

if (!empty($title)){
    $this->title = $title->title;
} else {
    $this->title = '718 Real Estate Advisors | Sell Your Property Fast | Get Fair All-Cash Offer';
}
?>
<style>
    body{
        background-color: #ebebeb;
    }

</style>
<?php
OwlCarouselWidget::begin([
    'container' => 'div',
    'containerOptions' => [
        'id' => 'container-id',
        'class' => 'owl'
    ],
    'pluginOptions'    => [
        'autoplay'          => true,
        'autoplayTimeout'   => 3000,
        'items'             => 1,
        'loop'              => true,
        'dots'              => false,
        'lazyLoad'          => true,
        'lazyLoadEager'     => 3,
    ]
]);
?>

<div class="item-class" id="1"></div>
<div class="item-class" id="2"></div>
<div class="item-class" id="3"></div>
<div class="item-class" id="4"></div>
<div class="item-class" id="5"></div>
<div class="item-class" id="6"></div>

<?php OwlCarouselWidget::end(); ?>
<?= ModalAlert::widget([
    'popupCssClass' => 'my-custom-class',
]) ?>
<div class="content gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div>
                    <h2 class = 'h2 header-margin'>Watch this short video</h2>
                    <h2 class = 'h2' style="margin-top:auto">to learn about us</h2>
                </div>
                <div class = "videoDiv">
                    <?=Html::img("/web/img/index/thumbnail.jpg",['alt' => "Press here to load video"])?>
                </div>
            </div>
            <div style="" class="col-sm-12 col-md-6 indexBtnContainer-top">
                <div>
                    <h1 class='h2' style="margin-top:40px">Looking to sell a property fast?</h1>
                </div>
                <div>
                    <p>Whether your property is in excellent condition or barely standing, vacant or rented to tenants, paying rent or non-paying.</p>
                    <br>
                    <p>We accommodate all your needs and make the selling experience pleasant.</p>
                </div>
                <div class="btnAbsolute" align="center">
                    <a href="tel:6462879111">
                        <button class="btn homeBtn send-btn">Call us for a fair all-cash offer</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content white">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div>
                    <h2 class = 'h2 header-margin'>Get fair cash value for your house</h2>
                </div>
                <div class="index-middle">

                </div>
            </div>
            <div style="" class="col-sm-12 col-md-6 indexBtnContainer-bottom">
                <div>
                    <h2 class = 'h2 header-margin'>We purchase a wide range of properties:</h2>
                </div>
                <div>
                    <ul style=" padding: 0;list-style: none">
                        <li>- Single Family</li>
                        <li>- Multi Family</li>
                        <li>- Mixed Use</li>
                        <li>- Condos</li>
                        <li>- Commercial Units</li>
                        <li>- Vacant Land</li>
                        <br>
                        <li>WE BUY THEM ALL</li>
                        <li>Anywhere in New York and New Jersey</li>
                    </ul>
                    
                </div>
                <div class="btnAbsolute" align="center">
                    <a href="#contact">
                        <button class="btn homeBtn send-btn">Call or fill out the form</button>
                    </a> 
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="header-margin">
                    <h2 class = 'h2 visiblePhone'>Avoid Foreclosure</h2>
                    <div class="index-bottom ">

                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <h2 class = 'header-margin h2 visiblePC'>Avoid Foreclosure</h2>
                <br>
                <p>We can help if your property is distressed, and we can assist you with foreclosure solutions.</p>
                <br>
                <p>In case there was a death, divorce, or any other family crisis, we can advise on how to proceed in accordance with your specific property.</p>
                <br>
                <p>Avoid the time and money it costs to sell your property through an agent. We can help you find an attorney; we can even pay for your closing costs and all other associated fees if you choose to.</p>
            </div>
        </div>
    </div>
</div>


<div align="center" style='position:relative;' class="process">
    <div style ="display: flex; justify-content: center;">
        <div class = 'weBuy'>
            <h2>WE BUY HOUSES IN</h2>
        </div>
    </div>
    <?=Html::img("/web/img/layouts/indexBanner.jpg",['alt' => "We buy houses in Brooklyn, Queens, Manhattan, Staten Island, Bronx, Nassau Country, New Jersey"] )?>
</div>
