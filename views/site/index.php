<?php
use kv4nt\owlcarousel\OwlCarouselWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use pa3py6aka\yii2\ModalAlert;
/* @var $this yii\web\View */

$this->title = '718 Real Estate Advisors';
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
        ]
    ]);
    ?>

<div class="item-class"><img src="/img/layouts/header.png" alt="Image 1"></div>
<div class="item-class"><img src="/img/layouts/header.png" alt="Image 1"></div>
<div class="item-class"><img src="/img/layouts/header.png" alt="Image 1"></div>
<div class="item-class"><img src="/img/layouts/header.png" alt="Image 1"></div>
    <?php OwlCarouselWidget::end(); ?>
<?= ModalAlert::widget([
    'popupCssClass' => 'my-custom-class',
]) ?>
<div class="content gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div>
                    <h2>Watch this short video to learn about us</h2>
                </div>
                <div style="height:300px;">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Pq8lUumT-mE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div>
                    <h2>Are you looking to sell house fast?</h2>
                </div>
                <div>
                    <p>Whether your property is vacant or rented to tenants, paying or non-paying, and whether your house is distressed or in excellent condition.</p>
                    <br>
                    <p>We accommodate all your needs and make the process comfortable for you.</p>
                    <br>
                    <br>
                    <a href="tel:6462879111">
                        <button class="btn send-btn">Call us for a fair all-cash offer</button>
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
                    <h2>Get fair cash offer for your house</h2>
                </div>
                <div class="index-middle" style="height: 400px">

                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div>
                    <h2>We purchase a wide range of properties:</h2>
                </div>
                <div>
                    <ul style=" padding: 0;list-style: none">
                        <li>- Single Family</li>
                        <li>- Multi Family</li>
                        <li>- Cooperatives</li>
                        <li>- Condos</li>
                        <li>- Commercial Units</li>
                        <li>- Vacant Land</li>
                        <br>
                        <li>WE BUY THEM ALL</li>
                        <li>Anywhere in New York and New Jersey</li>
                    </ul>
                    <br>
                    <a href="tel:6462879111">
                        <button class="btn send-btn">Call or fill out the Form</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content gray">
    <div class="container">
        <div class="row">
            <div style="padding: 20px" class="col-sm-12 col-md-6">
                <div style="height:400px;" class="index-bottom">

                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <h2>Avoid Foreclosure</h2>
                <br>
                <p>We can help if your property is distressed and we can assist you with foreclosure solutions.</p>
                <br>
                <p>In case there was a death, divorce or any other family crisis, we can advice on how to proceed in accordance with your specific property</p>
                <br>
                <p>Avoid the time and money it costs in order to sell your property through an agent. We can help you find an attorney; we can even pay for your closing costs and all other associated fees if you choose to.</p>
            </div>
        </div>
    </div>
</div>


<div align="center" class="process">
    <img src="/img/layouts/weBuy.png" alt="">
</div>
