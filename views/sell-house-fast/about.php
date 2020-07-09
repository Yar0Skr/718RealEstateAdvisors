<?php
/* @var $title \app\models\LayoutTitle */
/* @var $this yii\web\View */
/* @var $content \app\models\Faq */
use yii\helpers\Html;


if (!empty($title)){
    $this->title = $title->title;
} else {
    $this->title = 'FAQ';
}
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="FAQ-body">
    <div class="container white">
        <h1 align="center">Frequently Asked Questions</h1>
        <div class="navigaonusing">
            <div class="gaonutosal">
                <?php foreach ($content as $element){ ?>
                    <div class="pesontedan">
                        <input id="pesontedan-<?=$element->id?>" type="checkbox" name="pesontedans">
                        <label class="white" for="pesontedan-<?=$element->id?>"><?=$element->header?></label>
                        <div class="pesontedan-content gray">
                            <div class="white" style="margin:20px" class="row">
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

