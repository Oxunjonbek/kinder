<?php

namespace app\components;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class MyController extends Controller
{
	public function behaviors()
	{
		{        
			return [
				'as access' => [
                // 'class' => 'yii\filters\AccessControl',
					'class' => \yii\filters\AccessControl::className(),

					'rules' => [

						[
							'controllers' => ['site'],
							'actions' => ['logout', 'login', 'index','validate'],
							'allow' => true,                        
						],
						[
							'controllers' => ['site'],
							'actions' => ['menejer'],
							'allow' => (!\Yii::$app->user->isGuest && Yii::$app->user->identity->role == 2)?true:false,                      
						],
						[
							'controllers' => ['site'],
							'actions' => ['domain'],
							'allow' => (!\Yii::$app->user->isGuest && Yii::$app->user->identity->role == 3)?true:false,                      
						],
						[
							'controllers' => ['user'],
							'actions' => ['index', 'create', 'update','search','view'],
							'allow' => true,                        
						],
						[
							'controllers' => ['database'],
							'actions' => ['create','index','update','view'],
							'allow' => (!\Yii::$app->user->isGuest && Yii::$app->user->identity->role == 2)?true:false,
						],
						[
							'controllers' => ['domen'],
							'actions' => ['create','index','update','view'],
							'allow' => (!\Yii::$app->user->isGuest && Yii::$app->user->identity->role == 2)?true:false,
						],
						[
							'controllers' => ['hosting'],
							'actions' => ['history'],
							'allow' => (!\Yii::$app->user->isGuest && Yii::$app->user->identity->role == 2)?true:false,
						],
						[
							'controllers' => ['manager'],
							'actions' => ['create','index','update','view'],
							'allow' => (!\Yii::$app->user->isGuest && Yii::$app->user->identity->role == 2)?true:false,
						],
						[
							'controllers' => ['create','index','update','view'],
							'actions' => ['history'],
							'allow' => (!\Yii::$app->user->isGuest && Yii::$app->user->identity->role == 2)?true:false,
						],
						[
							'controllers' => ['register'],
							'actions' => ['index','view'],
							'allow' => (!\Yii::$app->user->isGuest && Yii::$app->user->identity->role == 2)?true:false,
						],
						[
							'controllers' => ['reklama'],
							'actions' => ['create','index','update','view'],
							'allow' => (!\Yii::$app->user->isGuest && Yii::$app->user->identity->role == 2)?true:false,
						],
						[
							'controllers' => ['tarif'],
							'actions' => ['create','index','update','view'],
							'allow' => (!\Yii::$app->user->isGuest && Yii::$app->user->identity->role == 2)?true:false,
						],
						[
							'controllers' => ['type'],
							'actions' => ['create','index','update','view'],
							'allow' => (!\Yii::$app->user->isGuest && Yii::$app->user->identity->role == 2)?true:false,
						],
						[
							'controllers' => ['website'],
							'actions' => ['create','index','update','view'],
							'allow' => (!\Yii::$app->user->isGuest && Yii::$app->user->identity->role == 2)?true:false,
						],
						[
							'controllers' => ['Register'],
							'actions' => ['create'],
							'allow' => true
						],
						[
							'controllers' => ['roles'],
							'actions' => ['create','index','update','view'],
							'allow' => (!\Yii::$app->user->isGuest && Yii::$app->user->identity->role == 1)?true:false,
						],
						[
							'controllers' => ['user'],
							'actions' => ['create'],
							'allow' =>true,
						],
						[
							'controllers' => ['user'],
							'actions' => ['create','index','update','view'],
							'allow' => (!\Yii::$app->user->isGuest && Yii::$app->user->identity->role == 1)?true:false,
						],
						[
							'controllers' => ['default'],
							'actions' => ['index','database','hosting','roles','user','type','reklama','domen','manager','news','register','tarif','website'],
							'allow' => (!\Yii::$app->user->isGuest && Yii::$app->user->identity->role == 1)?true:false,
						],
						


						[
							'roles' => ['@'],
							'allow' => true                       
						],
						[
							'allow' => true,
							'roles' => ['?']
						],


					],
				],
				'verbs' => [
					'class' => VerbFilter::className(),
					'actions' => [
						'delete' => ['post'],
					],
				],
			];

		}
	}

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
}