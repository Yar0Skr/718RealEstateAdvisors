<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
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
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class = "pre-nav" align="center">
    <div class="flex-nav">
        <a href=<?=Url::home()?>><img src="/img/icons/logo.png" alt=""></a></div>
    <div class="flex-nav">
        <div class="header-icons">
            <a href="tel:6462879111"><img src="\img\icons\phone-header.png" alt=""></a>
            <p>646-287-9111</p>
        </div>
        <div class="header-icons">
            <a href=""><img src="\img\icons\whatsapp-header.png" alt=""></a>
            <p>Whatsapp</p>
        </div>
        <div class="header-icons">
            <a href="mailto:info@718rea.com"><img src="\img\icons\mail-header.png" alt=""></a>
            <p>info@718rea.com</p>
        </div>
    </div>

</div>
<div class="" style="height: auto">
    <?php
    NavBar::begin([
        'options' => [
            'class' => 'nav',
        ],
    ]);
    echo Nav::widget([
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Common Reasons To Sell Property', 'url' => ['/site/reasons']],
            ['label' => 'Our process', 'url' => ['/site/process']],
            ['label' => 'Our Services', 'url' => ['/site/services']],
            ['label' => 'FAQ', 'url' => ['/site/about']],
            ['label' => 'Contact Us', 'url' => ['#contact']],
        ],
    ]);
    NavBar::end();
    ?>

</div>
<div class="container">
    <?= $content ?>
</div>
<footer class="footer">
    <div class ="container">
        <div class="social">
            <div class="icon-menu"><a href="https://www.facebook.com/realestate718/"><img src="\img\icons\facebook.png" alt=""></a></div>
            <div class="icon-menu"><a href="https://www.instagram.com/718realestateadvisors/"><img src="\img\icons\instagram.png" alt=""></a></div>
            <div class="icon-menu"><a href="tel:6462879111"><img src="\img\icons\phone.png" alt=""></a></div>
            <div class="icon-menu"><a href=""><img src="\img\icons\whatsapp.png" alt=""></a></div>
            <div class="icon-menu"><a href="mailto:info@718rea.com"><img src="\img\icons\mail.png" alt=""></a></div>
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
