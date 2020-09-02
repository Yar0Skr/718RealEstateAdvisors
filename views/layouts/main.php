<?php

/* @var $this \yii\web\View */
/* @var $content string */
use app\widgets\Alert;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
$model = new \app\models\Messages();
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/jpg', 'href' => Url::to(['/web/img/icons/icon.jpg'])]);
$this->registerMetaTag(['name'=>'ahrefs-site-verification','content'=>'f94cdce171c90f858fc10e7f83686c8725738f31e17cba1f84f57311df1c2266']);
$this->registerLinkTag(['rel' => 'canonical', 'href' => Url::canonical()]);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145164288-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);
        gtag('js', new Date());
        gtag('config', 'UA-145164288-2')};
        </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '137164857738574');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"
             src="https://www.facebook.com/tr?id=137164857738574&ev=PageView
&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
    <!--<meta content="width=1180" name="viewport" id="viewport"> -->
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    --><?php //$this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <script id="mcjs">
        !function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,
            m.src=i,p.parentNode.insertBefore(m,p)}
            (document,"script","https://chimpstatic.com/mcjs-connected/js/users/8f26b61ee44fc2118311738fc/cb9862b121d68e5ccc3028b75.js");
    </script>

</head>
<body>

<?php $this->beginBody() ?>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v7.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="109093680591201"
     theme_color="#0084ff">
</div>
<div class = "pre-nav">
    <div class="flex-nav">
        <a href=<?=Url::home()?>><?=Html::img("/web/img/icons/logo.png",['alt' => "Logo"])?></a>
    </div>
    <div class="flex-nav">
        <div align="center" class="header-icons">
            <a href="tel:6462879111"><?=Html::img("/web/img/icons/phone-header.png",['alt' => "Call us"])?></a>
        </div>
        <div align="center" class="header-icons">
            <a href="https://wa.me/16462879111?text=%20Hi%21%20I%20visited%20your%20website%20and%20want%20to%20sell%20my%20property"><?=Html::img("/web/img/icons/whatsapp-header.png",['alt' => "WhatsApp"])?></a>
        </div>
        <div align="center" class="header-icons">
            <a href="mailto:info@718rea.com"><?=Html::img("/web/img/icons/mail-header.png",['alt' => "Mail us"])?></a>
        </div>
    </div>

</div>
<!--<div class = "pre-nav-bottom showNav">-->
<!--    <div class="flex-nav">-->
<!--        <div class="header-icons">-->
<!--            <a href="tel:6462879111">--><?//=Html::img("/web/img/icons/phone-header.png")?><!--</a>-->
<!--        </div>-->
<!--        <div class="header-icons">-->
<!--            <a href="">--><?//=Html::img("/web/img/icons/whatsapp-header.png")?><!--</a>-->
<!--        </div>-->
<!--        <div class="header-icons">-->
<!--            <a href="mailto:info@718rea.com">--><?//=Html::img("/web/img/icons/mail-header.png")?><!--</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="wrap">

<?php
    NavBar::begin([
        'options' => [
            'class' => 'navbar-inverse nav',
        ],
    ]);
    echo Nav::widget([
        'items' => [
            ['label' => 'Home', 'url' => [Url::to('/sell-house-fast/index')]],
            ['label' => 'Common Reasons To Sell Property', 'url' => [Url::to('/sell-house-fast/reasons')]],
            ['label' => 'Our process', 'url' => ['/sell-house-fast/process']],
            ['label' => 'Our Services', 'url' => ['/sell-house-fast/services']],
            ['label' => 'FAQ', 'url' => ['/sell-house-fast/frequently-asked-questions']],
            ['label' => 'Contact Us', 'url' => [Url::current().'#contact'], 'options'=>['id' => 'smoothScroll']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="navbar prePhoneNav" >
        <input type="checkbox" id="myNav-toggle" hidden>
        <nav class="myNav phoneNav">
            <label for="myNav-toggle" class="myNav-toggle" onclick></label>
            <ul>
                <li><a href="<?= Url::to('/sell-house-fast/index') ?>">Home</a>
                <li><a href="<?= Url::to('/sell-house-fast/reasons') ?>">Common Reasons To Sell Property</a>
                <li><a href="<?= Url::to('/sell-house-fast/process') ?>">Our Process</a>
                <li><a href="<?= Url::to('/sell-house-fast/services') ?>">Our Services</a>
                <li><a href="<?= Url::to('/sell-house-fast/frequently-asked-questions') ?>">FAQ</a>
                <li><a href="<?= Url::to(Url::current().'#contact') ?>" id="navClose">Contact Us</a>
            </ul>
        </nav>
    </div>

    <?= $content ?>
</div>

<footer class="footer">
    <div class ="container">
        <div class="footer-form container">
            <div align="center">
                <a name="contact"></a>
                <h2>CONTACT US</h2>
                <?php $form = ActiveForm::begin([
                        'id'=>'myForm',
                    'action' => Url::toRoute('messages/post-create')
                ]); ?>

                <?= $form->field($model, 'client_name')
                    ->textInput(['placeholder'=>'Your full name *','style' => 'border-radius:30px'])
                    ->label(false) ?>
                <?= $form->field($model, 'client_phone')
                    ->textInput(['placeholder'=>'Phone number *','style' => 'border-radius:30px'])
                    ->label(false) ?>
                <?= $form->field($model, 'client_mail')
                    ->textInput(['placeholder'=>'Email','style' => 'border-radius:30px'])
                    ->label(false) ?>
                <?= $form->field($model, 'client_address')
                    ->textInput(['placeholder'=>'Address of property *','style' => 'border-radius:30px'])
                    ->label(false) ?>
                <?= $form->field($model, 'message')
                    ->textarea(['placeholder'=>'Message','style' => 'border-radius:30px;'])
                    ->label(false) ?>

                <?= Html::submitButton('Send', ['class' => 'btn align-self-center']) ?>


                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <div align="center" class="social">
            <div class="icon-menu"><a href="https://www.facebook.com/realestate718/"><?=Html::img("/web/img/icons/facebook.png")?></a></div>
            <div class="icon-menu"><a href="https://www.instagram.com/718realestateadvisors/"><?=Html::img("/web/img/icons/instagram.png")?></a></div>
            <div class="icon-menu"><a href="tel:6462879111"><?=Html::img("/web/img/icons/phone.png")?></a></div>
            <div class="icon-menu"><a href="https://wa.me/16462879111?text=%20Hi%21%20I%20visited%20your%20website%20and%20want%20to%20sell%20my%20property"><?=Html::img("/web/img/icons/whatsapp.png")?></a></div>
            <div class="icon-menu"><a href="mailto:info@718rea.com"><?=Html::img("/web/img/icons/mail.png")?></a></div>
        </div>
        <div class="rights">
            © 2020 All rights Reserved. Design by 718 Real Estate Advisors
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
