<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OurPartnerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ариза';
?>
<div class="our-partner-index">

    <?php
    $columns = [
        ['class' => 'kartik\grid\SerialColumn'],

        //'id',
        'name',
        // [
        //     'attribute'=>'files',
        //     'format' => 'html',
        //     'value' => function($model){
        //         return \yii\helpers\Html::img($model->file, ['width'=>90]);
        //     }
        // ],
        'files',
    ];

    $columns[] = [
        'class' => 'kartik\grid\ActionColumn',
        'template' => '{update} {delete}',
        'noWrap' => true,
        'buttons' => [
            'update' => function ($url, $model, $key) {
                return Html::a('<i class="fas fa-edit"></i>', ['update', 'id' => $model->id],
                    [
                        'data-id' => $model->id,
                        'class' => 'btn btn-link',
                        'title' => 'Update',
                        'aria-label' => 'Update',

                    ]);
            },
            'delete' => function ($url, $model, $key) {
                return Html::a('<i class="fas fa-trash text-danger"></i>', ['delete', 'id' => $model->id],
                    ['class' => 'label btn-link',
                        'data' => [
                            'confirm' => 'Вы уверены, что хотите удалить этот элемент ?',
                            'method' => 'post',
                        ],
                        'title' => 'Delete',
                        'aria-label' => 'Delete',

                    ]);
            },
        ],
    ];
    ?>

    <?= GridView::widget([
        'id' => 'certificate-grid',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        // 'floatHeader'=>true,
        'responsive' => true,
        'hover' => true,
        'condensed' => true,
        // 'floatHeaderOptions'=>['top'=>'50'],
        'floatOverflowContainer' => true,
        'panel' => [
            'type' => 'success card',
            // 'before' => Html::a('<i class="glyphicon glyphicon-plus"></i> Добавить',['create'], ['class' => 'btn btn-success']),
            // 'footer' => false,
            'after' => '',
        ],
        'panelTemplate' => '
            {panelBefore}
            {items}
            {panelAfter}
            {panelFooter}
        ',
        'toolbar' => [
            '<div style="width: 100%;">',
            '<div class="card-header ui-sortable-handle">',
            '<h3 class="card-title">{summary}</h3>',
            '<div class="card-tools">' . Html::a('<i class="fa fa-plus"></i> Киритиш', ['create'], ['class' => 'btn btn-info']) . ' &nbsp;  {toggleData} &nbsp; {export}</div>',
            '</div>',
            '</div>'
        ],
        'showPageSummary' => true,
        'pageSummaryRowOptions' => ['class' => 'kv-page-summary'],
        'exportConfig' => [
            GridView::EXCEL => [
                'label' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Excel',
                'icon' => 'floppy-remove',
                'showHeader' => true,
                'showPageSummary' => true,
                'showFooter' => true,
                'showCaption' => true,
                'worksheet' => 'ExportWorksheet',
                'filename' => 'Сертификаты',
                'alertMsg' => 'The EXCEL export file will be generated for download.',
                'cssFile' => '',
                'options' => ['title' => 'Save as Excel']
            ],
        ],
        'export' => [
            'icon' => 'fa fa-file-excel',
            'fontAwesome' => true,
            // 'menuOptions' => ['class' => 'grid-export-menu']
        ],
        'toggleDataOptions' => [
            'all' => ['icon' => 'fa fa-expand'],
            'page' => ['icon' => 'fa fa-compress'],
        ],

        'pjax' => true,
        'columns' => $columns,
    ]); ?>

</div>
