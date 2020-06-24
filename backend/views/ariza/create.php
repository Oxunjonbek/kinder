<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ariza */

$this->title = 'Аризани киритинг';
$this->params['breadcrumbs'][] = ['label' => 'Ариза', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ariza-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
