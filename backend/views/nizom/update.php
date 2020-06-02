<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Nizom */

$this->title = 'Update Nizom: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Nizoms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nizom-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>