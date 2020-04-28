<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
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
<div class = "pre-nav">

</div>
<div class="wrap">
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
    <?= $content ?>
</div>

<footer class="footer">
    <div class ="container">
        <div class="footer-form">
            <div>
                <a name="contact"></a>
                <h2>CONTACT US</h2>
                <?php $form = ActiveForm::begin(); ?>

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
                    ->textarea(['placeholder'=>'Message','style' => 'border-radius:30px; height:100px'])
                    ->label(false) ?>

                <?= Html::submitButton('Send', ['class' => 'btn align-self-center']) ?>


                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <div class="social">
            BUTTONS
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
