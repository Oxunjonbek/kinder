<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pedagog */

$this->title = 'Педагоглар: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Педагоглар', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pedagog-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
