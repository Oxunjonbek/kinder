<?php

namespace backend\controllers;

use Yii;
use common\models\Tanlov;
use backend\models\search\TanlovSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * TanlovController implements the CRUD actions for Tanlov model.
 */
class TanlovController extends AppAdminController
{


    /**
     * Lists all Tanlov models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TanlovSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tanlov model.
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
     * Creates a new Tanlov model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tanlov();

        if ($model->load(Yii::$app->request->post())) {
            $img = UploadedFile::getInstance($model, 'img');
            $pdf = UploadedFile::getInstance($model, 'pdf');
            if (!empty($img)) {
                $model->image = random_int(0,9999). '.' . $img->extension;
            }
             if (!empty($pdf)) {
                $model->pdf_name = random_int(0,9999). '.' . $pdf->extension;
            }
            
            if ($model->save()) {
                if (!empty($img)) {
                    $img->saveAs('uploads/tanlov/' . $model->image);
                    // return $this->redirect(['index']);
                }
                if (!empty($pdf)) {
                    $pdf->saveAs('uploads/' . $model->pdf_name);
                    // return $this->redirect(['index']);
                }
                return $this->redirect(['index']);
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tanlov model.
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
            $pdf = UploadedFile::getInstance($model, 'pdf');
            if (!empty($img)) {
                $model->image = random_int(0,9999). '.' . $img->extension;
            }
             if (!empty($pdf)) {
                $model->pdf_name = random_int(0,9999). '.' . $pdf->extension;
            }
            
            if ($model->save()) {
                if (!empty($img)) {
                    $img->saveAs('uploads/tanlov/' . $model->image);
                    // return $this->redirect(['index']);
                }
                if (!empty($pdf)) {
                    $pdf->saveAs('uploads/' . $model->pdf_name);
                    // return $this->redirect(['index']);
                }
                return $this->redirect(['index']);
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tanlov model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $data = Tanlov::findOne($id);
        unlink(Yii::$app->basePath . '/web/uploads/tanlov/' . $data->image);
        unlink(Yii::$app->basePath . '/web/uploads/' . $data->pdf_name);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tanlov model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tanlov the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tanlov::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
