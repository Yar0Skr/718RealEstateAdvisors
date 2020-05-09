<?php


namespace app\controllers;


use Yii;
use yii\web\Controller;

class ParentController extends Controller
{
    public function beforeAction($action)
    {
        if (Yii::$app->user->isGuest){
            if ($action->id == "post-create" || ($action->controller->id == 'info' && $action->id == 'view')) {
                return parent::beforeAction($action);
            }else{
            return Yii::$app->getResponse()->redirect('/');
            }
        } else{
            $this->layout = 'simple';
            return parent::beforeAction($action);
        }

    }
}