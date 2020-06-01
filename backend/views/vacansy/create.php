<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Vacansy */

$this->title = 'Create Vacansy';
$this->params['breadcrumbs'][] = ['label' => 'Vacansies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vacansy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
