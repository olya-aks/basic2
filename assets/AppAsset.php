<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      //'css/jquery.formstyler.css',
      //'css/jquery.formstyler.theme.css',
    'css/fonts.css',
    'css/chosen.css',
        'css/bootstrap-datepicker.css',
        'css/add_site.css',
        'css/table.css',
    //'css/jquery.fancybox.css',
    'css/perfecttable.css',
    'css/perfect-scrollbar.css',



    ];
    public $js = [
      'js/jquery-ui.min.js',
      'js/slim.js',
      'js/js.js',
      'js/chosen.jquery.js',
      'js/init.js',
      'js/bootstrap-datepicker.min.js',
      'js/bootstrap-datepicker.ru.js',
      'js/perfect-scrollbar.min.js',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
