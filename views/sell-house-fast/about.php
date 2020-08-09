<?php
/* @var $title \app\models\LayoutTitle */
/* @var $this yii\web\View */
/* @var $content \app\models\Faq */
use yii\helpers\Html;

$i=true;
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
                <?php foreach ($content as $element){
                    $i = !$i;?>
                    <div class="pesontedan">
                        <input id="pesontedan-<?=$element->id?>" type="checkbox" name="pesontedans">
                        <label class="white color-<?=$i?>" for="pesontedan-<?=$element->id?>" style="border: 3px solid;"><?=$element->header?></label>
                        <div class="pesontedan-content gray">
                            <div class="white" style="margin:20px" class="row">
                                <div class="col-12 ">
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

