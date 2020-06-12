<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tadbir */

$this->title = 'Тадбирларни киритиш';
$this->params['breadcrumbs'][] = ['label' => 'Тадбирлар', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tadbir-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
