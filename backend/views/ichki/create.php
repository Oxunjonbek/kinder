<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ichki */

$this->title = 'Create Ichki';
$this->params['breadcrumbs'][] = ['label' => 'Ichkis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ichki-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
