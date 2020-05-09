<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchInfoImages */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Info Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

<div class="info-images-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'info_id',
            'image',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view} {delete}'],
        ],
    ]); ?>


</div>
</div>