<?php

namespace app\controllers;

use app\models\Faq;
use app\models\Info;
use app\models\Messages;
use app\models\MetaLayout;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SellHouseFastController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [

                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function addMetaTag($metaTagArray){
        if (!empty($metaTagArray)){
            foreach ($metaTagArray as $metaTag){
                \Yii::$app->view->registerMetaTag([
                    'name' => $metaTag->name,
                    'content' => $metaTag->content
                ]);
            }
        }

    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $metaArray = MetaLayout::find()->where(['page_id'=>1])->all();
        $this->addMetaTag($metaArray);
        return $this->render('index');
    }

    public function actionWelcome()
    {
        
        return $this->render('welcome');
    }


    public function actionFrequentlyAskedQuestions()
    {
        $metaArray = MetaLayout::find()->where(['page_id'=>5])->all();
        $this->addMetaTag($metaArray);
        $content = Faq::find()->orderBy('order_number')->all();
        return $this->render('about',['content'=>$content]);
    }

    public function actionServices()
    {
        $metaArray = MetaLayout::find()->where(['page_id'=>4])->all();
        $this->addMetaTag($metaArray);
        return $this->render('services');
    }

    public function actionReasons()
    {
        $metaArray = MetaLayout::find()->where(['page_id'=>2])->all();
        $this->addMetaTag($metaArray);
        $content = Info::find()->orderBy('order_number')->all();
        return $this->render('reasons',['content'=>$content]);
    }

    public function actionProcess()
    {
        $metaArray = MetaLayout::find()->where(['page_id'=>3])->all();
        $this->addMetaTag($metaArray);
        return $this->render('process');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect('/admin');
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('/admin');
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

//    /**
//     * Displays contact page.
//     *
//     * @return Response|string
//     */
//    public function actionContact()
//    {
//        $model = new ContactForm();
//        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
//            Yii::$app->session->setFlash('contactFormSubmitted');
//
//            return $this->refresh();
//        }
//        return $this->render('contact', [
//            'model' => $model,
//        ]);
//    }
}
