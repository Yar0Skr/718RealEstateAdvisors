<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InfoMetatags */

$this->title = 'Update Info Metatags: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Info Metatags', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container">

<div class="info-metatags-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>