<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tanlov */

$this->title = 'Танловни киритиш';
$this->params['breadcrumbs'][] = ['label' => 'Танловлар', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanlov-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
