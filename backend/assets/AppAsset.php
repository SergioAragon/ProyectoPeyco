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
        'css/site.css',
        'css/fullcalendar.css',
        'css/fullcalendar.print.css',
        // 'themes/smoothness/jquery-ui.css',
    ];
    public $js = [
        'js/main.js',
        // 'js/fullcalendar.js',
        'js/gcal.js',
        // 'js/jquery.min.js',
        'js/jquery-ui.min.js',
        'js/moment.min.js',
        'js/locale-all.js',
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
    ];
}
