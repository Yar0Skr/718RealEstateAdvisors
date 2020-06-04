<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

?>
<div align="center">
    <h1>Admin panel</h1>
    <div>
        <p>
            <?php
            if (Yii::$app->user->identity->auth_type == 1){
                echo Html::a('Users', ['/users'], ['class'=>'btn btn-primary']);
            }
            ?>
            <?= Html::a('Messages', ['/messages'], ['class'=>'btn btn-primary']) ?>
            <?= Html::a('Estates', ['/estates'], ['class'=>'btn btn-primary']) ?>
            <?= Html::a('Editor', ['/blog'], ['class'=>'btn btn-primary']) ?>
            <?= Html::a('Owl carousel images', ['/info-images'], ['class'=>'btn btn-primary']) ?>
            <?= Html::a('Metatags', ['/info-metatags'], ['class'=>'btn btn-primary']) ?>
        </p>
    </div>
</div>

