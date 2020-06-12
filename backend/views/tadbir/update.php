<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tadbir */

$this->title = 'Тадбирлар: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Тадбирлар', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tadbir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
