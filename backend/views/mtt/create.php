<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mtt */

$this->title = 'МТТ ни киритинг';
$this->params['breadcrumbs'][] = ['label' => 'Mtts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mtt-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
