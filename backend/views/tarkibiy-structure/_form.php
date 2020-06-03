<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model common\models\TarkibiyStructure */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarkibiy-structure-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->widget(TinyMce::className(), [
		'options' => ['rows' => 9],
		'language' => 'es',
		'clientOptions' => [
			'plugins' => [
				"advlist autolink lists link charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu paste"
			],
			'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
		]
	]);?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'img')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
