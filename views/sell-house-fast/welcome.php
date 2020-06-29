<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Welcome to 718 Real Estate Advisors';
$this->params['breadcrumbs'][] = $this->title;

?>
<!-- multistep form -->
<div class="container">
    <div class="col-sm-12">
        <div class="mm-survey">

            <div class="mm-survey-progress">
                <div class="mm-survey-progress-bar mm-progress"></div>
            </div>

            <div class="mm-survey-bottom">
                <div class="mm-survey-container">

                    <div class="mm-survey-page active" data-page="1">
                        <div class="mm-survery-content">
                            <div class="mm-survey-question">
                                <p>Question 1</p>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio01" data-item="1" name="radio1" value="red" />
                                <label for="radio01"><span></span><p>a</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio02" data-item="1" name="radio1" value="blue" />
                                <label for="radio02"><span></span><p>b</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio03" data-item="1" name="radio1" value="green" />
                                <label for="radio03"><span></span><p>c</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio04" data-item="1" name="radio1" value="purple" />
                                <label for="radio04"><span></span><p>d</p></label>
                            </div>
                        </div>
                    </div>
                    <div class="mm-survey-page" data-page="2">
                        <div class="mm-survery-content">
                            <div class="mm-survey-question">
                                <p>Question 2</p>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio05" data-item="2" name="radio2" value="honda" />
                                <label for="radio05"><span></span><p>a</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio06" data-item="2" name="radio2" value="ford" />
                                <label for="radio06"><span></span><p>b</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio07" data-item="2" name="radio2" value="mercedes" />
                                <label for="radio07"><span></span><p>c</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio08" data-item="2" name="radio2" value="ferrari" />
                                <label for="radio08"><span></span><p>d</p></label>
                            </div>
                        </div>
                    </div>
                    <div class="mm-survey-page" data-page="3">
                        <div class="mm-survery-content">
                            <div class="mm-survey-question">
                                <p>Question 3</p>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio09" data-item="3" name="radio3" value="3" />
                                <label for="radio09"><span></span><p>a</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio10" data-item="3" name="radio3" value="4" />
                                <label for="radio10"><span></span><p>b</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio11" data-item="3" name="radio3" value="3.41" />
                                <label for="radio11"><span></span><p>c</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio12" data-item="3" name="radio3" value="3.14" />
                                <label for="radio12"><span></span><p>d</p></label>
                            </div>
                        </div>
                    </div>
                    <div class="mm-survey-page" data-page="4">
                        <div class="mm-survery-content">
                            <div class="mm-survey-question">
                                <p>Question 4</p>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio13" data-item="4" name="radio4" value="1" />
                                <label for="radio13"><span></span><p>a</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio14" data-item="4" name="radio4" value="2" />
                                <label for="radio14"><span></span><p>b</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio15" data-item="4" name="radio4" value="3" />
                                <label for="radio15"><span></span><p>c</p></label>
                            </div>
                            <div class="mm-survey-item">
                                <input type="radio" id="radio16" data-item="4" name="radio4" value="4" />
                                <label for="radio16"><span></span><p>d</p></label>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="mm-survey-page" data-page="5">
                        <div class="mm-survery-content">

                        </div>
                    </div>
                    <div class="mm-survey-page" data-page="6">
                        <div class="mm-survery-content">

                        </div>
                    </div>
                    <div class="mm-survey-page" data-page="7">
                        <div class="mm-survery-content">

                        </div>
                    </div> -->

                </div>

                <div class="mm-survey-controller">
                    <div class="mm-prev-btn">
                        <button>Prev</button>
                    </div>
                    <div class="mm-next-btn">
                        <button disabled="true">Next</button>
                    </div>
                    <div class="mm-finish-btn">
                        <?php
                        Modal::begin([
                            'header' => '<h2>Estate info</h2>',
                            'toggleButton' => [
                                'label' => 'Submit',
                                'tag' => 'button',
                                'class' => 'mm-finish-btn',
                            ],
                        ]);
                        ?>
                        <?php $form = ActiveForm::begin([
                            'id' => 'contact-form',
                        ]); ?>
                        <div align="center">
                            <p>Name</p>
                            <input type="text">
                            <br>
                            <p>Email</p>
                            <input type="email">
                            <br>
                            <p>Address</p>
                            <input type="text">
                            <div class="form-group">
                                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                            </div>
                        </div>




                        <?php ActiveForm::end(); ?>

                        <?php Modal::end(); ?>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>