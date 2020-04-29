<?php
use kv4nt\owlcarousel\OwlCarouselWidget;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = '718 Real Estate Advisors';
?>
    <?php
    OwlCarouselWidget::begin([
        'container' => 'div',
        'containerOptions' => [
            'id' => 'container-id',
            'class' => 'container-class'
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


<div class="content gray">
    <div class="container container-flex">
        <div class="flex-div"><h2>Watch this short video to learn about us</h2></div>
        <div class="flex-div"><h2>Are you looking to sell house fast?</h2></div>
    </div>
    <div class="container container-flex bottom-flex">
        <div class="flex-div index-top">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Pq8lUumT-mE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="flex-div bottom-flex">
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

<div class="content white">
    <div class="container container-flex">
        <div class="flex-div"><h2>Get fair cash offer for your house</h2></div>
        <div class="flex-div">
            <h2>We purchase a wide range of properties:</h2>
        </div>
    </div>
    <div class="container container-flex">
        <div class="flex-div bottom-flex index-middle">

        </div>
        <div class="flex-div bottom-flex">
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
            <br>
            <a href="tel:6462879111">
                <button class="btn send-btn">Call or fill out the Form</button>
            </a>
        </div>
    </div>
</div>

<div class="content gray">
    <div class="container container-flex">
        <div class="flex-div bottom-flex index-bottom">

        </div>
        <div class="flex-div bottom-flex">
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

<div class="pre-footer">

</div>
