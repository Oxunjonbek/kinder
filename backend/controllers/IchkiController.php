<?php

namespace backend\controllers;

use Yii;
use common\models\Ichki;
use backend\models\IchkiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * IchkiController implements the CRUD actions for Ichki model.
 */
class IchkiController extends AppAdminController
{


    /**
     * Lists all Ichki models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new IchkiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ichki model.
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
     * Creates a new Ichki model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Ichki();

        if ($model->load(Yii::$app->request->post())) {
            $files = UploadedFile::getInstance($model, 'files');
            if (!empty($files)) {
                $model->file = random_int(0,9999). '.' . $files->extension;
            }
            
            if ($model->save()) {
                if (!empty($files)) {
                    $files->saveAs('uploads/file/' . $model->file);
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
     * Updates an existing Ichki model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $files = UploadedFile::getInstance($model, 'files');
            if (!empty($files)) {
                $model->file = random_int(0,9999). '.' . $files->extension;
            }
            
            if ($model->save()) {
                if (!empty($files)) {
                    $files->saveAs('uploads/file/' . $model->file);
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
     * Deletes an existing Ichki model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $data = Ichki::findOne($id);
        unlink(Yii::$app->basePath . '/web/uploads/file/' . $data->file);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ichki model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Ichki the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ichki::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
