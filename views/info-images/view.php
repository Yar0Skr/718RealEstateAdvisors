<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\InfoImages */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Info Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">
<div class="info-images-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <div align = "center">
    <?=Html::img('@web/uploads/info/owl/'.$model->image)?>
    </div>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'info_id',
            'image',
        ],
    ]) ?>

</div>
</div>