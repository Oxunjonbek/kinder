<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Standart */

$this->title = 'Update Standart: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Standarts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="standart-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
