<?php

namespace app\controllers;

use Yii;
use app\models\Info;
use app\models\InfoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * InfoController implements the CRUD actions for Info model.
 */
class InfoController extends Controller
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
     * Lists all Info models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Info model.
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
     * Creates a new Info model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Info();

        if(Yii::$app->request->post()){
            $model->is_delete = 0;
            $model->load(Yii::$app->request->post());

            $image = UploadedFile::getInstance($model, 'image');
            $file = UploadedFile::getInstance($model, 'file');

            //image upload
            if (!empty($image)) {
                $path = getcwd() . '/uploads/info/images/';
                if (!file_exists($path)) {
                    var_dump(mkdir($path, 0777, true));
                }
                $array = explode(".", $image->name);
                $name = end($array);
                $model->image = Yii::$app->security->generateRandomString() . ".{$name}";
                $image->saveAs($path . $model->image);
            }
            //file upload
            if (!empty($file)) {
                $path = getcwd() . '/uploads/info/files/';
                if (!file_exists($path)) {
                    var_dump(mkdir($path, 0777, true));
                }
                $array = explode(".", $file->name);
                $name = end($array);
                $model->file = Yii::$app->security->generateRandomString() . ".{$name}";
                $file->saveAs($path . $model->file);
            }
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Info model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if(Yii::$app->request->post()){
            $oldImageName = $model->image;
            $oldFileName = $model->file;
            $image = UploadedFile::getInstance($model, 'image');
            $file = UploadedFile::getInstance($model, 'file');
            $model->load(Yii::$app->request->post());

            //Image upload
            if (!empty($image)) {
                $path = getcwd() . '/uploads/info/images/';
                if (!file_exists($path)) {
                    var_dump(mkdir($path, 0777, true));
                }
                if ($oldImageName != null) {
                    unlink($path . $oldImageName);
                }
                $array = explode(".", $image->name);
                $name = Yii::$app->security->generateRandomString() . '.' . end($array);
                $image->saveAs($path . $name);
                $model->image = $name;
            } else {
                $model->image = $oldImageName;
            }

            //File upload
            if (!empty($file)) {
                $path = getcwd() . '/uploads/info/files/';
                if (!file_exists($path)) {
                    var_dump(mkdir($path, 0777, true));
                }
                if ($oldImageName != null) {
                    unlink($path . $oldFileName);
                }
                $array = explode(".", $file->name);
                $name = Yii::$app->security->generateRandomString() . '.' . end($array);
                $file->saveAs($path . $name);
                $model->file = $name;
            } else {
                $model->file = $oldImageName;
            }

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionGetFile($path)
    {
        return \Yii::$app->response->sendFile($path);
    }

    /**
     * Deletes an existing Info model.
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
     * Finds the Info model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Info the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Info::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
