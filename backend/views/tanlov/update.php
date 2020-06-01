<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tanlov */

$this->title = 'Update Tanlov: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Tanlovs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tanlov-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
