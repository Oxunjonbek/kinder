<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\GenelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Genels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Genel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'title:ntext',
            'phone',
            'image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
