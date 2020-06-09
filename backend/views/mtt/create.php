<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mtt */

$this->title = 'Create Mtt';
$this->params['breadcrumbs'][] = ['label' => 'Mtts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mtt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
