<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Genel;
use common\models\Vacansy;
use common\models\Structure;
use common\models\TarkibiyStructure;
use common\models\Tadbir;
use common\models\Tanlov;
use common\models\Elonlar;
use common\models\Qonunlar;
// use common\models\Standartlar;
use common\models\Nizom;
use common\models\Farmonlar;
use common\models\Ariza;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
                    'logout' => ['post'],
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

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $elon = Elonlar::find()->orderBy(['id'=>SORT_DESC])->one();
        $tadbir = Tadbir::find()->orderBy(['id'=>SORT_DESC])->one();
        $tanlov = Tanlov::find()->orderBy(['id'=>SORT_DESC])->one();
        $tanlovlar = Tanlov::find()->orderBy(['id'=>SORT_DESC])->limit(4)->all();
        $tadbirlar = Tadbir::find()->orderBy(['id'=>SORT_DESC])->limit(4)->all();
        $elonlar = Elonlar::find()->orderBy(['id'=>SORT_DESC])->limit(4)->all();
        $item3 = Tadbir::find()->orderBy(['id'=>SORT_DESC])->limit(3)->all();
        $tanlov3 = Tanlov::find()->orderBy(['id'=>SORT_DESC])->limit(3)->all();
        return $this->render('index',[
            'elon'=>$elon,
            'tadbir'=>$tadbir,
            'tanlov'=>$tanlov,
            'tadbirlar'=>$tadbirlar,
            'tanlovlar'=>$tanlovlar,
            'elonlar'=>$elonlar,
            'item3'=>$item3,
            'tanlov3'=>$tanlov3
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }

    public function actionTadbirlar()
    {
        $tadbir = Tadbir::find()->all();
        return $this->render('tadbirlar',[
            'tadbir'=>$tadbir
        ]);
    }

    public function actionTadbirSingle()
    {
        return $this->render('tadbirlar-single');
    }

    public function actionTanlovlar()
    {
        $tanlov = Tanlov::find()->all();
        return $this->render('tanlov',[
            'tanlov'=>$tanlov
        ]);
    }

    public function actionElonlar()
    {
        $elon = Elonlar::find()->all();
        return $this->render('elon',[
            'elon'=>$elon
        ]);
    }

    public function actionTuzilma()
    {
        $tuzilma = Structure::find()->all();
        return $this->render('tuzilma',[
            'tuzilma'=>$tuzilma
        ]);
    }

    public function actionTarkibiy()
    {
        $tarkibiy = TarkibiyStructure::find()->all();
        return $this->render('tarkibiy',[
            'tarkibiy'=>$tarkibiy
        ]);
    }

    public function actionVakansiyalar()
    {
        $vakant = Vacansy::find()->all();
        return $this->render('vakansiya',[
            'vakant'=>$vakant
        ]);
    }

    public function actionRahbariyat()
    {
        $genels = Genel::find()->all();
        return $this->render('rahbariyat',
            [
                'genels'=>$genels
            ]);
    }

    public function actionPedagog()
    {
        return $this->render('pedagog');
    }

    public function actionQonunlar()
    {
        $nizomlar = Nizom::find()->all();
        return $this->render('nizomlar',[
            'nizomlar'=>$nizomlar
        ]);
    }

    public function actionStandartlar()
    {
        $nizomlar = Nizom::find()->all();
        return $this->render('nizomlar',[
            'nizomlar'=>$nizomlar
        ]);
    }
    public function actionNizom()
    {
        $nizomlar = Nizom::find()->all();
        return $this->render('nizomlar',[
            'nizomlar'=>$nizomlar
        ]);
    }

    public function actionTavsiyalar()
    {
        $nizomlar = Nizom::find()->all();
        return $this->render('nizomlar',[
            'nizomlar'=>$nizomlar
        ]);
    }
    public function actionFarmonlar()
    {
        $farmonlar = Farmonlar::find()->all();
        return $this->render('farmonlar',[
            'farmonlar'=>$farmonlar
        ]);
    }

    public function actionQarorlar()
    {
        $farmonlar = Farmonlar::find()->all();
        return $this->render('qarorlar',[
            'farmonlar'=>$farmonlar
        ]);
    }

    public function actionHujjatlar()
    {
        $farmonlar = Farmonlar::find()->all();
        return $this->render('ichki',[
            'farmonlar'=>$farmonlar
        ]);
    }

    public function actionElektron()
    {
        // $farmonlar = Farmonlar::find()->all();
        return $this->render('elektron',[
            // 'farmonlar'=>$farmonlar
        ]);
    }
    public function actionPedagoglar()
    {
        return $this->render('pedagoglar');
    }

    public function actionOtaOnalar()
    {
        return $this->render('ota-onalar');
    }

    public function actionSavolJavob()
    {
        return $this->render('savol-javoblar');
    }

    public function actionAriza()
    {
        $ariza = Ariza::find()->all();
        return $this->render('ariza',[
            'ariza'=>$ariza
        ]);
    }

    public function actionMttlar()
    {
        return $this->render('mttlar');
    }

    public function actionQabulhona()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('qabulhona', [
                'model' => $model,
            ]);
        }
    }
}
