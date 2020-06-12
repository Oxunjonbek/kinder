<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Genel */

$this->title = 'Раҳбарни киритиш';
$this->params['breadcrumbs'][] = ['label' => 'Раҳбарлар', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genel-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
