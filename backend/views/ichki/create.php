<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ichki */

$this->title = 'Ички хужжатларни киритиш';
$this->params['breadcrumbs'][] = ['label' => 'Ички хужжатлар', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ichki-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
