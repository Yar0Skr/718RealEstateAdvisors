<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MetaLayoutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Meta Layouts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container meta-layout-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Meta Layout', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'page_id',
            'name',
            'content',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
