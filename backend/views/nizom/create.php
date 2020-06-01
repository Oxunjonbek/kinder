<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Nizom */

$this->title = 'Create Nizom';
$this->params['breadcrumbs'][] = ['label' => 'Nizoms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nizom-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
