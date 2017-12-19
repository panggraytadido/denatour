<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
	public $sourcePath = '@vendor/themes/traveler/assets';   
	
	public $css = [
        'css/bootstrap.css',       
		'css/font-awesome.css',       
		'css/icomoon.css',       
		'css/styles.css',       
		'css/mystyles.css',       
    ];
	
    public $js = [
        'js/modernizr.js',
        'js/jquery.js',
        'js/bootstrap.js',
        'js/slimmenu.js',				
		'js/bootstrap-datepicker.js',
        'js/bootstrap-timepicker.js',
        'js/nicescroll.js',
        'js/dropit.js',				
		'js/ionrangeslider.js',
        'js/icheck.js',
        'js/fotorama.js',
        'js/typeahead.js',				
		'js/card-payment.js',
        'js/magnific.js',
        'js/owl-carousel.js',
        'js/fitvids.js',				
		'js/tweet.js',
        'js/countdown.js',
        'js/gridrotator.js',
        'js/custom.js',		
    ];
	
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}

