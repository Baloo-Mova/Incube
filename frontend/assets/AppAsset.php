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
        'css/site.css',
        'css/fonts.css',
        'css/normalize.css',
        'css/fontello.css',
        'css/animate.css',
        'css/bootstrap.min.css',
        //'css/bootstrap-theme.css',
        'css/font-awesome.min.css',
                'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/owl.transitions.css',
        'css/style.css',
        'css/responsive.css',
        
    ];
    public $js = [
        'js/vendor/modernizr-2.6.2.min.js',
        //'js/vendor/jquery-1.10.2.min.js',
        'js/bootstrap.min.js',
        'js/wow.js',
        'js/main.js',
        'js/owl.carousel.min.js',
        
        'js/plugins.js',
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
