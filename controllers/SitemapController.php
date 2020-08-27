<?php


namespace app\controllers;


use Yii;
use yii\web\Controller;

class SitemapController extends Controller
{
    public function actionIndex(){
       return Yii::$app->response->sendFile('sitemap.xml','sitemap',['inline'=>true])->send();
    }
}