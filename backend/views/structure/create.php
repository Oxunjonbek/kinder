<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Structure */

$this->title = 'Тузилма';
$this->params['breadcrumbs'][] = ['label' => 'Тузилма', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="structure-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
