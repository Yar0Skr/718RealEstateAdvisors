<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InfoImages */

$this->title = 'Create Info Images';
$this->params['breadcrumbs'][] = ['label' => 'Info Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

<div class="info-images-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>