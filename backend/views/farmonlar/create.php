<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Farmonlar */

$this->title = 'Create Farmonlar';
$this->params['breadcrumbs'][] = ['label' => 'Farmonlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farmonlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
