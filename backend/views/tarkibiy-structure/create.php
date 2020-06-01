<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TarkibiyStructure */

$this->title = 'Create Tarkibiy Structure';
$this->params['breadcrumbs'][] = ['label' => 'Tarkibiy Structures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarkibiy-structure-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
