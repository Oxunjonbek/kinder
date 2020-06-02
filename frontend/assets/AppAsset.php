<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        "foto/css/reset.css",
        "foto/css/main-stylesheet.css",
        "foto/css/font-awesome.min.css",
        "foto/css/lightbox.css",
        "foto/css/shortcodes.css",
        "foto/css/custom-fonts.css",
        "foto/css/custom-colors.css",
        "foto/css/responsive.css",
        "foto/css/ie-ancient.css",
        "foto/css/demo-settings.css",
    ];
    public $js = [
        "foto/jscript/jquery-latest.min.js",
        "foto/jscript/theme-scripts.js",
        "foto/jscript/lightbox.js",
        "foto/jscript/demo-settings.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
