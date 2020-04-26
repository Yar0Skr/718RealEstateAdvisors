<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EstatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Estates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estates-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Estates', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'callback_date',
            'callback_time',
            'own_years',
            'is_primary',
            //'rental_price',
            //'is_occupied',
            //'can_vacate',
            //'bedrooms',
            //'bathrooms',
            //'needs_repairing',
            //'renovation_year',
            //'has_mortgage',
            //'mortgage_amount',
            //'has_taxes',
            //'tax_amount',
            //'is_only',
            //'address',
            //'comment:ntext',
            //'is_delete',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
