<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Info */

$this->title = $model->header;
$this->params['breadcrumbs'][] = ['label' => 'Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">
    <div class="info-view">
        <div align="center">
            <h1><?= Html::encode($this->title) ?></h1>
                <?php if(!Yii::$app->user->isGuest){
                if(Yii::$app->user->identity->auth_type == 1){?>
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
            <?php }
            } ?>

        </div>
    </div>
    <div align="center" class="infoImg">
        <?=Html::img('@web/uploads/info/images/'.$model->image)?>
    </div>
    <div class="info-body">
        <p><?=$model->text?></p>
    </div>

    <div align="center">
        <?php
        if($model->file != NULL){
            $path = getcwd().'/uploads/info/files/'.$model->file;

            echo Html::a("Download file", ['get-file', 'path' => $path], [
                'class' => 'btn btn-info',
                'data' => [
                    'method' => 'post',
                ],
            ]);
        }
        ?>
    </div>
</div>
