<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 06/09/16
 * Time: 3:40 PM
 */

namespace frontend\web\template\HealthGreen;
use yii\web\AssetBundle;


class HealthGreenAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/healthgreen/asset';


    public $css = [
        'css/bootstrap.min.css',
        'css/font-awesome.css',
        'css/prettyPhoto.css',
        'css/animate.min.css',
        'css/responsive.css',
        'css/scrolling-nav.css',
        'css/main.css',
    ];

    public $js = [
        //'js/jquery.js',
        'js/bootstrap.min.js',
        'js/jquery.prettyPhoto.js',
        'js/jquery.isotope.min.js',
        //'js/jquery.scrollTo.min.js',
        'js/wow.min.js',
        'js/scrolling-nav.js',
        'js/jquery.easing.min.js',
        'js/main.js',
    ];

    public $depends = [
        // 'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
    ];
}
