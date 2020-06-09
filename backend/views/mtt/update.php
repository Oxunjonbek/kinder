<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mtt */

$this->title = 'Update Mtt: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Mtts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mtt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
