<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Farmonlar */

$this->title = 'Фармонларни киритиш';
$this->params['breadcrumbs'][] = ['label' => 'Фармонлар', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farmonlar-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
