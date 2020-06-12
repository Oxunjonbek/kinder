<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Elonlar */

$this->title = 'Эълонлар';
$this->params['breadcrumbs'][] = ['label' => 'Эълонлар', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="elonlar-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
