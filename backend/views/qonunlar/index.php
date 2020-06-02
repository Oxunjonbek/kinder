<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\QonunlarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Qonunlars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qonunlar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Qonunlar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name:ntext',
            'address:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>