<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pedagog */

$this->title = 'Педагогларни киритиш';
$this->params['breadcrumbs'][] = ['label' => 'Педагогларни киритиш', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedagog-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
