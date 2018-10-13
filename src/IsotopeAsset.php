<?php

namespace huijiewei\waterfall;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 2018/10/8
 * Time: 10:28
 */
class IsotopeAsset extends AssetBundle
{
    public $sourcePath = '@npm/isotope-layout/dist';

    public $js = [
        'isotope.pkgd.min.js',
    ];

    public $depends = [
        JqueryAsset::class,
    ];
}
