<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TarkibiyStructure */

$this->title = 'Таркибий тузилма: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Таркибий тузилма', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tarkibiy-structure-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
