<?php

namespace backend\controllers;

use Yii;
use common\models\Genel;
use backend\models\search\GenelSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * GenelController implements the CRUD actions for Genel model.
 */
class GenelController extends Controller
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
     * Lists all Genel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GenelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Genel model.
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
     * Creates a new Genel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Genel();

        if ($model->load(Yii::$app->request->post())) {
            $img = UploadedFile::getInstance($model, 'img');
            if (!empty($img)) {
                $model->image = random_int(0,9999). '.' . $img->extension;
            }
            
            if ($model->save()) {
                if (!empty($img)) {
                    $img->saveAs('uploads/genel/' . $model->image);
                    return $this->redirect(['index']);
                }
                return $this->redirect(['index']);
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Genel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $img = UploadedFile::getInstance($model, 'img');
            if (!empty($img)) {
                $model->image = random_int(0,9999). '.' . $img->extension;
            }
            
            if ($model->save()) {
                if (!empty($img)) {
                    $img->saveAs('uploads/genel/' . $model->image);
                    return $this->redirect(['index']);
                }
                return $this->redirect(['index']);
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Genel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $data = Genel::findOne($id);
        unlink(Yii::$app->basePath . '/web/uploads/genel/' . $data->image);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Genel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Genel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Genel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
