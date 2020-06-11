<?php

/* @var $this yii\web\View */
/* @var $content \app\models\Faq */
use yii\helpers\Html;

$this->title = 'FAQ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="FAQ-body">
    <div class="container white">
        <div class="navigaonusing">
            <div class="gaonutosal">
                <?php foreach ($content as $element){ ?>
                    <div class="pesontedan">
                        <input id="pesontedan-<?=$element->id?>" type="checkbox" name="pesontedans">
                        <label for="pesontedan-<?=$element->id?>"><?=$element->header?></label>
                        <div class="pesontedan-content">
                            <div style="margin:20px" class="row">
                                <div class="col-12">
                                    <p><?=$element->short_info?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

