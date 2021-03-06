<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use common\models\Genel;
use common\models\Mtt;
use common\models\Vacansy;
use common\models\Structure;
use common\models\TarkibiyStructure;
use common\models\Tadbir;
use common\models\Tanlov;
use common\models\Elonlar;
use common\models\Qonunlar;
use common\models\Standart;
use common\models\Nizom;
use common\models\Farmonlar;
use common\models\Ariza;
use common\models\Bm;
use common\models\Ichki;
use common\models\Interaktiv;
use common\models\Pedagog;
use common\models\Qabulhona;
use yii\data\Pagination;
$lang = \Yii::$app->language;
$this->title = \Yii::t('template','aloqa');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-content">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Yii::t('template','Agar sizda savollaringiz bo\'lsa , iltimos biz bilan bog\'lanish uchun quyidagi shaklni to\'ldiring. Rahmat.') ?>
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label(\Yii::t('template','name')); ?>

                <?= $form->field($model, 'email')->label(\Yii::t('template','email')); ?>

                <?= $form->field($model, 'subject')->label(\Yii::t('template','subject')); ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6])->label(\Yii::t('template','body')); ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ])->label(\Yii::t('template','verifyCode')); ?>

                <div class="form-group">
                    <?= Html::submitButton(\Yii::t('template','Yuborish'), ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
