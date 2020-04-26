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
            ['label' => 'Common Reasons To Sell Property', 'url' => ['/site/about']],
            ['label' => 'Our process', 'url' => ['/site/contact']],
            ['label' => 'Our Services', 'url' => ['/site/index']],
            ['label' => 'FAQ', 'url' => ['/site/about']],
            ['label' => 'Contact Us', 'url' => ['/site/contact']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class ="container">
        <div class="footer-form">
            <div>
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'client_name') ?>
                <?= $form->field($model, 'client_phone') ?>
                <?= $form->field($model, 'client_mail') ?>
                <?= $form->field($model, 'client_address') ?>
                <?= $form->field($model, 'message') ?>
                <div class="form-group">
                    <?= Html::submitButton('Send', ['class' => 'btn btn-lg btn-primary', 'style'=>'display: flex; justify-content: center;']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>

        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
