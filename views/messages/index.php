<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MessagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Messages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="messages-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php if(Yii::$app->user->identity->auth_type==1){
        $buttons = '{view} {delete}';
    } else {
        $buttons = '{view}';
    } ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'client_name',
            'client_phone',
            'client_mail',
            'client_address',
            //'message:ntext',
            'status_id',
            //'user_id',
            //'is_delete',
            //'created_at',
            //'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => $buttons,
            ],
        ],
    ]); ?>


</div>
