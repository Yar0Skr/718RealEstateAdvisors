<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InfoMetatags */

$this->title = 'Create Info Metatags';
$this->params['breadcrumbs'][] = ['label' => 'Info Metatags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

<div class="info-metatags-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>