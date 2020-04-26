<?php


namespace app\controllers;


use Yii;
use yii\web\Controller;

class ParentController extends Controller
{
    public function beforeAction($action)
    {
        if (Yii::$app->user->isGuest){
            return Yii::$app->getResponse()->redirect('/');
        } else{
            return parent::beforeAction($action);
        }

    }
}