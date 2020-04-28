<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $users app\models\Users */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-create">
    <?php if(Yii::$app->user->identity->auth_type == 1) {
    ?>
    <p class="create-button-container">
        <?= Html::a('Add user', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php
}?>
<div class="users-create">
    <?php if(empty($users)) {
        ?>
        <div class="no-user white-block" >
            <div>No users found</div>
        </div>
        <?php
    } else {
        foreach ($users as $user){
            ?>
            <div class="no-user white-block" >
                <div>Name: <?=$user->name?></div>
            </div>
            <div class="no-user white-block" >
                <div>Username: <?=$user->username?></div>
            </div>
            <div class="no-user white-block" >
                <div>Role:
                    <?php if($user->auth_type == 1){
                        echo 'Administrator';
                    } else {
                        echo 'Support';
                     } ?>
                </div>
            </div>
            <?php if ($user->auth_type == 1){
                echo Html::a('View', ['view', 'id' => $user->id], ['class' => 'btn btn-primary']);
             }?>
        <?php
        }
    }
    ?>
</div>
