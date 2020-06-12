<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TarkibiyStructure */

$this->title = 'Таркибий тузилма';
$this->params['breadcrumbs'][] = ['label' => 'Таркибий тузилма', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarkibiy-structure-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
