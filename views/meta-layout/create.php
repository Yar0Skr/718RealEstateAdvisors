<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MetaLayout */

$this->title = 'Create Meta Layout';
$this->params['breadcrumbs'][] = ['label' => 'Meta Layouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container meta-layout-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
