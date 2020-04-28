<?php

namespace app\controllers;

use Yii;
use app\models\Users;
use app\models\UsersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsersController implements the CRUD actions for Users model.
 */
class UsersController extends ParentController
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
     * Lists all Users models.
     * @return mixed
     */
    public function actionIndex()
    {
         $users = Users::find()->all();
         return $this->render('index',['users'=>$users]);
    }

    /**
     * Displays a single Users model.
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
     * Creates a new Users model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Users();
        $model->is_delete = 0;

        if (!empty(Yii::$app->request->post())){
            $data = Yii::$app->request->post();
            $users = Users::findOne(['username'=>$data['Users']['username']]);
            if (empty($users)){
                $data['Users']['password'] = Yii::$app->security->generatePasswordHash($data['Users']['password']);
                if ($model->load($data) && $model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                } else {
                    Yii::$app->session->setFlash('error', 'Error while saving');
                }
            } else {
                Yii::$app->session->setFlash('error', 'Username is already taken');
            }
        }


        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Users model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldPass = $model->password;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if($model->password != "") {
                $model->password = Yii::$app->getSecurity()->generatePasswordHash($model->password);
            } else {
                $model->password = $oldPass;
            }
            $model->save();
            return $this->redirect(['index']);
        } else {
            $model->password = '';
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Users model.
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
     * Finds the Users model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Users the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Users::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function beforeAction($action)
    {

        if (Yii::$app->user->identity->auth_type != 1){
            return Yii::$app->getResponse()->redirect('/');
        } else{
            return parent::beforeAction($action);
        }

    }
}
