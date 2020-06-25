<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
/* @var $this yii\web\View */
/* @var $model common\models\Tanlov */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tanlov-form">

    <?php $form = ActiveForm::begin(); ?>

    	<?= $form->field($model, 'title')->widget(TinyMce::className(), [
		'options' => ['rows' => 9],
		'language' => 'en_GB',
		'clientOptions' => [
			'plugins' => [
				"advlist autolink lists link charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu paste"
			],
			'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
		]
	]);?>
	<?= $form->field($model, 'text')->widget(TinyMce::className(), [
		'options' => ['rows' => 9],
		'language' => 'en_GB',
		'clientOptions' => [
			'plugins' => [
				"advlist autolink lists link charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu paste"
			],
			'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
		]
	]);?>


	<?= $form->field($model, 'img')->fileInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'pdf')->fileInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сақлаш', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
