<?php
/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 2018/10/8
 * Time: 10:34
 */

namespace huijiewei\waterfall;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class ImageLoadedAsset extends AssetBundle
{
    public $sourcePath = '@npm/imagesloaded';

    public $js = [
        'imagesloaded.pkgd.min.js',
    ];

    public $depends = [
        JqueryAsset::class,
    ];
}
