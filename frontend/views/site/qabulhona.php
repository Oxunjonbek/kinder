<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Виртуал қабулхона';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-content">
    <h1><?= Html::encode($this->title) ?></h1>


    <div class="row">
        <div class="col-lg-9">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <?= $form->field($model, 'name',['options'=>['class'=>'form-']])->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'viloyat_id')->dropDownList([
                0 => 'Бойсун тумани',
                'autofocus' => true]); ?>
                <?= $form->field($model, 'tuman',['options'=>[
                    'class'=>'form-']])->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'manzil',['options'=>[
                    'class'=>'form-']])->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'phone',['options'=>[
                    'class'=>'form-']])->textInput(['autofocus' => true]) ?>            

                <?= $form->field($model, 'jins',['options'=>[
                    'class'=>'form-']])->radioList([1 => 'Erkak',2=>'Ayol']); ?>

                <?= $form->field($model, 'birth_day',['options'=>[
                    'class'=>'form-']])->textInput(['autofocus' => true]) ?>


                <?= $form->field($model, 'maqom')->dropDownList([
                    0 => 'Банд ишлайди',
                    1 => 'Ишсиз',
                    2 => 'Пенсионер',
                    3=>'Талаба'
                ]); ?>

                <?= $form->field($model, 'murojaat_type',['options'=>[
                    'class'=>'form-']])->radioList(
                        [1 => 'ariza ',2=>'taklif',3=>'shikoyat']
                    );?>


                <?= $form->field($model, 'files',['options'=>[
                    'class'=>'form-']])->fileInput(['autofocus' => true]) ?>


                <?= $form->field($model, 'murojaat_text',['options'=>
                ['class'=>'form-']])->textarea(['rows' => 6]) ?>
                <?= $form->field($model, 'tasqidlash',['options'=>
                ['class'=>'form-']])->radioList([1 => 'ha']);  ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Мурожаатни юбориш', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>

    </div>
