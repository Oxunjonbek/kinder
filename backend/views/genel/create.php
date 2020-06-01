<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Genel */

$this->title = 'Create Genel';
$this->params['breadcrumbs'][] = ['label' => 'Genels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
