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
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145164288-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-145164288-2');
    </script>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<script type="text/javascript">

</script>

<?php $this->beginBody() ?>
<div class = "pre-nav">
    <div class="flex-nav">
        <a href=<?=Url::home()?>><?=Html::img("/web/img/icons/logo.png")?></a>
    </div>
    <div class="flex-nav hideNav">
        <div align="center" class="header-icons">
            <a href="tel:6462879111"><?=Html::img("/web/img/icons/phone-header.png")?></a>
        </div>
        <div align="center" class="header-icons">
            <a href=""><?=Html::img("/web/img/icons/whatsapp-header.png")?></a>
        </div>
        <div align="center" class="header-icons">
            <a href="mailto:info@718rea.com"><?=Html::img("/web/img/icons/mail-header.png")?></a>
        </div>
    </div>

</div>
<div class = "pre-nav-bottom showNav">
    <div class="flex-nav">
        <div class="header-icons">
            <a href="tel:6462879111"><?=Html::img("/web/img/icons/phone-header.png")?></a>
        </div>
        <div class="header-icons">
            <a href=""><?=Html::img("/web/img/icons/whatsapp-header.png")?></a>
        </div>
        <div class="header-icons">
            <a href="mailto:info@718rea.com"><?=Html::img("/web/img/icons/mail-header.png")?></a>
        </div>
    </div>
</div>
<div class="wrap" style="height: auto">
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
            ['label' => 'FAQ', 'url' => ['/sell-house-fast/about']],
            ['label' => 'Contact Us', 'url' => [Url::current().'#contact'], 'options'=>['id' => 'smoothScroll']],
        ],
    ]);
    NavBar::end();
    ?>
    <?= $content ?>
</div>

<footer class="footer">
    <div class ="container">
        <div align="center" class="social">
            <div class="icon-menu"><a href="https://www.facebook.com/realestate718/"><?=Html::img("/web/img/icons/facebook.png")?></a></div>
            <div class="icon-menu"><a href="https://www.instagram.com/718realestateadvisors/"><?=Html::img("/web/img/icons/instagram.png")?></a></div>
            <div class="icon-menu"><a href="tel:6462879111"><?=Html::img("/web/img/icons/phone.png")?></a></div>
            <div class="icon-menu"><a href=""><?=Html::img("/web/img/icons/whatsapp.png")?></a></div>
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
