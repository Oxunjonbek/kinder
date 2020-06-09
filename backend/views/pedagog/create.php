<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pedagog */

$this->title = 'Create Pedagog';
$this->params['breadcrumbs'][] = ['label' => 'Pedagogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedagog-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
