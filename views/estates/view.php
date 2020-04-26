<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Estates */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Estates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="estates-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'callback_date',
            'callback_time',
            'own_years',
            'is_primary',
            'rental_price',
            'is_occupied',
            'can_vacate',
            'bedrooms',
            'bathrooms',
            'needs_repairing',
            'renovation_year',
            'has_mortgage',
            'mortgage_amount',
            'has_taxes',
            'tax_amount',
            'is_only',
            'address',
            'comment:ntext',
            'is_delete',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
