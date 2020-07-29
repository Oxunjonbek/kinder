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

$this->title = \Yii::t('template','virtualqabul');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-content">
    <h1><?= Html::encode($this->title) ?></h1>


    <div class="row">
        <div class="col-lg-9">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label(\Yii::t('template','name')); ?>
            <?= $form->field($model, 'viloyat_id')->dropDownList([
                0 => 'Бойсун тумани',
                'autofocus' => true])->label(\Yii::t('template','viloyat')); ?>
                <?= $form->field($model, 'tuman')->textInput(['autofocus' => true])->label(\Yii::t('template','tuman')); ?>
                <?= $form->field($model, 'manzil')->textInput(['autofocus' => true])->label(\Yii::t('template','manzil1')); ?>

                <?= $form->field($model, 'email')->label(\Yii::t('template','email')); ?>

                <?= $form->field($model, 'phone')->textInput(['autofocus' => true])->label(\Yii::t('template','Phone')); ?>            

                <?= $form->field($model, 'jins')->radioList([
                        1 => \Yii::t('template','Erkak'),
                        2=>\Yii::t('template','Ayol'),
                    ])->label(\Yii::t('template','jins')); ?>

                <?= $form->field($model, 'birth_day')->textInput(['autofocus' => true])->label(\Yii::t('template','day')); ?>


                <?= $form->field($model, 'maqom')->dropDownList([
                    0 => \Yii::t('template','Band ishlaydi'),
                    1 => \Yii::t('template','Ishsiz'),
                    2 => \Yii::t('template','Pensioner'),
                    3=>\Yii::t('template','Talaba'),
                ])->label(\Yii::t('template','maqom')); ?>

                <?= $form->field($model, 'murojaat_type')->radioList([
                            1 =>\Yii::t('template','ariza'),
                            2=>\Yii::t('template','taklif'),
                            3=>\Yii::t('template','shikoyat'),
                    ]
                    )->label(\Yii::t('template','murojaat_type'));?>


                <?= $form->field($model, 'files')->fileInput(['autofocus' => true])->label(\Yii::t('template','files')); ?>


                <?= $form->field($model, 'murojaat_text')->textarea(['rows' => 6])->label(\Yii::t('template','murojaat_text')); ?>
                <?= $form->field($model, 'tasqidlash')->radioList([
                    1 => \Yii::t('template','ha'),
                    2 => \Yii::t('template','yuq')
                ])->label(\Yii::t('template','tasqidlash'));  ?>

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
