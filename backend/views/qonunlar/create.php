<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Qonunlar */

$this->title = 'Қонунлар';
$this->params['breadcrumbs'][] = ['label' => 'Қонунлар', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qonunlar-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
