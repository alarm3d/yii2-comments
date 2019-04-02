<?php

namespace alarm3d\comments\assets;

/**
 * Class CommentsAsset
 * @package alarm3d\comments\assets
 */
class CommentsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/alarm3d/yii2-comments/src/assets/sources/';

    public $css = [
        'css/comments.scss',
    ];

    public $js = [
        'js/comments.js',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
    ];
}