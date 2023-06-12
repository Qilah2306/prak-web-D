<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset115 extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'template/css/all.min.css',
        'template/font/boostrap-icons.css',
        'template/css/owl.carousel.min.css',
        'template/css/lightbox.min.css',
        'template/css/boostrap.min.css',
        'template/css/style.css',
    ];
    public $js = [
        'template/js/boostrap.bundle.min.js',
        'template/wow/wow.min.js',
        'template/easing/easing.min.js',
        'template/waypoints/waypoints.js',
        'template/owlcarousel/owl.carousel.min.js',
        'template/isotope/isotope.pkgd.min.js',
        'template/js/lightbox.js',
        'template/js/main.js',
       
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}