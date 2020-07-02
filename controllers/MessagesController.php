<?php

namespace app\controllers;

use Yii;
use app\models\Messages;
use app\models\MessagesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MessagesController implements the CRUD actions for Messages model.
 */
class MessagesController extends ParentController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Messages models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MessagesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Messages model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Messages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->request->post()){
            $data = Yii::$app->request->post();
            $model = new Messages();
            $model->load($data);
            $model->is_delete = 0;
            if($model->save()){
                return true;
            } else {
                return false;
            }
        }

        $model = new Messages();
        $model->is_delete = 0;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    
    public function actionSendMail(){
        if (Yii::$app->request->post()) {
            $data=Yii::$app->request->post();
        }
        try{
            $message=
                'Name: '.$data['name'].'. 
                 Phone number: '.$data['phone'].'. 
                 Email: '.$data['email'].'. 
                 Address: '.$data['address'].'. 
                 ZIP-code: '.$data['zip'];
            mail('info@718rea.com','Estate Advisors Blog Form',$message);
                return $this->render('success');
        }
        catch(Exception $ex){
                return $this->render('error');
        }
    }
    
    public function actionPostCreate()
    {
        if (Yii::$app->request->post()) {
            $model = new Messages();
            $model->load(Yii::$app->request->post());
            $model->is_delete = 0;
            $message=
                'Name: '.$model->client_name.'. 
                 Phone number: '.$model->client_phone.'. 
                 Email: '.$model->client_mail.'. 
                 Address: '.$model->client_address.'. 
                 Message: '.$model->message;
            if ($model->save()) {
               mail('info@718rea.com','Estate Advisors Form №'.$model->id,$message);
                return $this->render('success');
            } else {
                return $this->render('error');
            }
        }
    }
    /**
     * Updates an existing Messages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Messages model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Messages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Messages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Messages::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
