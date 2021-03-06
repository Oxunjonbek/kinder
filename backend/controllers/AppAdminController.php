<?php


namespace backend\controllers;

use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


class AppAdminController extends Controller{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /*public function beforeAction($action)
    {
        if(Yii::$app->user->identity->id === null) return $this->redirect(['/site/login']);

        $user = User::find()->where(['id' => Yii::$app->user->identity->id])->one();

        if($action->id =='index' || $action->id =='view')
        {
            if($user->rolId !== 1) throw new HttpException(403,'У вас нет разрешения на доступ к этому действию.');
        }
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }*/

    /* public function beforeAction($action)
     {
         if (parent::beforeAction($action)) {
             if ($this->enableCsrfValidation && Yii::$app->getErrorHandler()->exception === null && !Yii::$app->getRequest()->validateCsrfToken()) {
                 throw new BadRequestHttpException(Yii::t('yii', 'Unable to verify your data submission.'));
             }

             return true;
         }

         return false;
     }*/


}