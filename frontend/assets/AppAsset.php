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
        //'css/bootstrap-theme.css',
        'css/bootstrap.min.css',
        //'css/bootstrap-theme.css',
        'css/font-awesome.min.css',
                'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/owl.transitions.css',
        'css/style.css',
        'css/responsive.css',
        //'css/sliders/jquery.smartmenus.bootstrap.css',
        //'css/sliders/jquery.simpleLens.css',
        'css/sliders/slick.css',
        //'css/sliders/nouislider.css',
        'css/sliders/theme-color/default-theme.css',
        //'css/sliders/sequence-theme.modern-slide-in.css',
        'css/sliders/style.css',
        
    ];
    public $js = [
        'js/vendor/modernizr-2.6.2.min.js',
        //'js/vendor/jquery-1.10.2.min.js',
        'js/bootstrap.min.js',
        'js/wow.js',
        'js/main.js',
        'js/owl.carousel.min.js', 
        'js/plugins.js',
        'js/jquery.simpleLens.js',
        
       // 'js/sliders/bootstrap.js',
      //  'js/sliders/jquery.smartmenus.js',
       // 'js/sliders/jquery.smartmenus.bootstrap.js',
       // 'js/sliders/sequence.js',
       // 'js/sliders/js/sequence-theme.modern-slide-in.js',
        'js/sliders/jquery.simpleGallery.js',
        //'js/sliders/jquery.simpleLens.js',
        'js/sliders/slick.js',
        //'js/sliders/nouislider.js',
        'js/sliders/custom.js',
        
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
