<?php

namespace app\controllers;
use yii\helpers\Url;

use app\models\InfoImages;
use app\models\InfoMetatags;
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
class BlogController extends ParentController
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
     * @param string $urlName
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($urlName)
    {
        if(Yii::$app->request->post()){
            $data = Yii::$app->request->post();
            $model = new InfoImages();
            $model->load($data);
            $image = UploadedFile::getInstance($model, 'image');
            //image upload
            if (!empty($image)) {
                $path = getcwd() . '/uploads/info/owl/';
                if (!file_exists($path)) {
                    var_dump(mkdir($path, 0777, true));
                }
                // $array = explode(".", $image->name);
                // $name = end($array);
                $model->image = $image->name;
                // Yii::$app->security->generateRandomString() . ".{$name}";
                $image->saveAs($path . $model->image);
                $model->save();
            } else {
                $model = new InfoMetatags();
                $model->load($data);
                $model->save();
            }
        }

        return $this->render('view', [
            'model' => $this->findModelByUrlName($urlName),
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
            $data = Yii::$app->request->post();
            $model->is_delete = 0;
            $model->load($data);

            $image = UploadedFile::getInstance($model, 'image');

            //image upload
            if (!empty($image)) {
                $path = getcwd() . '/uploads/info/images/';
                if (!file_exists($path)) {
                    var_dump(mkdir($path, 0777, true));
                }
                // $array = explode(".", $image->name);
                // $name = end($array);
                $model->image = $image->name;
                // Yii::$app->security->generateRandomString() . ".{$name}";
                $image->saveAs($path . $model->image);
            }

            if ($model->save()) {
                return $this->redirect(Url::toRoute('/blog/'.$element->url_name));
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
            $image = UploadedFile::getInstance($model, 'image');
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
                // $array = explode(".", $image->name);
                $name = $image->name;
                // Yii::$app->security->generateRandomString() . '.' . end($array);
                $image->saveAs($path . $name);
                $model->image = $name;
            } else {
                $model->image = $oldImageName;
            }


            if ($model->save()) {
                return $this->redirect(Url::toRoute('/blog/'.$element->url_name));
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
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

    /**
     * Finds the Info model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $urlName
     * @return Info the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModelByUrlName($urlName)
    {
        if (($model = Info::findOne(['url_name'=>$urlName])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
