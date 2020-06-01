<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'adminlte304/plugins/fontawesome-free/css/all.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'adminlte304/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'adminlte304/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'adminlte304/plugins/jqvmap/jqvmap.min.css',
        'adminlte304/dist/css/adminlte.min.css',
        'adminlte304/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'adminlte304/plugins/daterangepicker/daterangepicker.css',
        'adminlte304/plugins/summernote/summernote-bs4.css',
    ];
    public $js = [
//        'adminlte304/plugins/jquery/jquery.min.js',
//        'adminlte304/plugins/jquery-ui/jquery-ui.min.js',
        'adminlte304/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'adminlte304/plugins/chart.js/Chart.min.js',
        'adminlte304/plugins/sparklines/sparkline.js',
        'adminlte304/plugins/jqvmap/jquery.vmap.min.js',
        'adminlte304/plugins/jqvmap/maps/jquery.vmap.usa.js',
        'adminlte304/plugins/jquery-knob/jquery.knob.min.js',
        'adminlte304/plugins/moment/moment.min.js',
        'adminlte304/plugins/daterangepicker/daterangepicker.js',
        'adminlte304/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        'adminlte304/plugins/summernote/summernote-bs4.min.js',
        'adminlte304/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'adminlte304/dist/js/adminlte.js',
        'adminlte304/dist/js/pages/dashboard.js',
        'adminlte304/dist/js/demo.js',  
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
