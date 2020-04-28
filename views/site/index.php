<?php
use kv4nt\owlcarousel\OwlCarouselWidget;
/* @var $this yii\web\View */

$this->title = '718 Real Estate Advisors';
?>
    <?php
    OwlCarouselWidget::begin([
        'container' => 'div',
        'containerOptions' => [
            'id' => 'container-id',
            'class' => 'container-class'
        ],
        'pluginOptions'    => [
            'autoplay'          => true,
            'autoplayTimeout'   => 3000,
            'items'             => 1,
            'loop'              => true,
        ]
    ]);
    ?>

    <div class="item-class"><img src="/img/layouts/header.png" alt="Image 1"></div>
    <div class="item-class"><img src="/img/2.jpg" alt="Image 2"></div>
    <div class="item-class"><img src="/img/3.jpg" alt="Image 3"></div>
    <div class="item-class"><img src="/img/4.jpg" alt="Image 4"></div>


    <?php OwlCarouselWidget::end(); ?>


<div class="site-index">
</div>
