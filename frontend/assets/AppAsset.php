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
        "html/css/reset.css",
        "html/css/main-stylesheet.css",
        "html/css/font-awesome.min.css",
        "html/css/lightbox.css",
        "html/css/shortcodes.css",
        "html/css/custom-fonts.css",
        "html/css/custom-colors.css",
        "html/css/responsive.css",
        "html/css/ie-ancient.css",
        "html/css/demo-settings.css",
    ];
    public $js = [
        "html/jscript/jquery-latest.min.js",
        "html/jscript/theme-scripts.js",
        "html/jscript/lightbox.js",
        "html/jscript/demo-settings.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
