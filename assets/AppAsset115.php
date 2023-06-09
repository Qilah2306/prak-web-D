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
        'templates115/css/core.css',
        'templates115/css/components.css',
        'templates115/css/icons.css',
        'templates115/css/pages.css',
        'templates115/css/responsive.css',
    ];
    public $js = [
        'templates115/js/modernizr.min.js',
        'templates115/js/bootstrap.min.js',
        'templates115/js/detect.js',
        'templates115/js/fastclick.js',
        'templates115/js/jquery.slimscroll.js',
        'templates115/js/jquery.blockUI.js',
        'templates115/js/waves.js',
        'templates115/js/wow.min.js',
        'templates115/js/jquery.nicescroll.js',
        'templates115/js/jquery.scrollTo.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}