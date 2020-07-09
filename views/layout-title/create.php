<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LayoutTitle */

$this->title = 'Create Layout Title';
$this->params['breadcrumbs'][] = ['label' => 'Layout Titles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="layout-title-create">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>

