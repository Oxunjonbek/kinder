<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Bm */

$this->title = ' BМ қарорларини киритиш';
$this->params['breadcrumbs'][] = ['label' => 'BМ қарорлари', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bm-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
