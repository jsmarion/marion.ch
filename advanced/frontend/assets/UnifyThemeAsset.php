<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 7/29/2016
 * Time: 12:19 PM
 */

namespace frontend\assets;

use jsmarion\template\unify\UnifyAsset;


/**
 * Class unifyThemeAsset
 * @package frontend\assets
 */
class UnifyThemeAsset extends UnifyAsset
{
    public $css = [
//        'https://fonts.googleapis.com/css?family=Open+Sans:300,400|Raleway:300,400,500,600,700|Lato:300,400,400italic,600,700',
        /*        'css/essentials.css',*/
        'css/style.css',
        'css/headers/header-default.css',
        'css/headers/header-v6.css',
        'css/footers/footer-v1.css',
        'css/theme-colors/default.css',
        'css/theme-skins/dark.css',
        'css/custom.css',
//        'css/theme-colors/light-green.css',
    ];

    public $js = [
        'js/app.js',
    ];
}