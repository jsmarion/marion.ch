<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets\vendor;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FontawesomeAsset extends AssetBundle
{
    public $sourcePath = '@bower/fontawesome';
   // public $baseUrl = '@web';
    public $css = [
        'css/font-awesome.min.css'
    ];
    public $js = [
    ];
    public $depends = [
    ];
    public $jsOptions = [
        'async' => 'async',
    ];
}
