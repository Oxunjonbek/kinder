<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Vacansy */

$this->title = 'Бўш иш ўринлари';
$this->params['breadcrumbs'][] = ['label' => 'Бўш иш ўринлари', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vacansy-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
