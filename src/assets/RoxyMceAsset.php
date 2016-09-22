<?php
/**
 * Created by Navatech.
 * @project RoxyMce
 * @author  Phuong
 * @email   phuong17889[at]gmail.com
 * @date    15/02/2016
 * @time    10:24 SA
 * @version 1.0.0
 */
namespace navatech\roxymce\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * {@inheritDoc}
 */
class RoxyMceAsset extends AssetBundle {

	/**
	 * {@inheritDoc}
	 */
	public function init() {
		parent::init();
		$this->sourcePath = '@vendor/navatech/yii2-roxymce/src/web';
		$this->depends    = [
			'yii\web\JqueryAsset',
			'yii\bootstrap\BootstrapAsset',
			'yii\bootstrap\BootstrapPluginAsset',
		];
		$this->css        = [
			//			'css/jquery-ui-1.10.0.custom.css',
			'css/main.css',
		];
		$this->js         = [
			//			'js/filetypes.js',
			//			'js/main.js',
			//			'js/utils.js',
			//			'js/file.js',
			//			'js/directory.js',
			//			'js/custom.js',
			//			'js/jquery-ui.js',
		];
		$this->jsOptions  = ['position' => View::POS_HEAD];
		echo '<script>';
		echo 'var somethings_went_wrong = "' . \Yii::t('roxy', 'Somethings went wrong') . '";';
		echo 'var empty_directory = "' . \Yii::t('roxy', 'Empty directory') . '";';
		echo '</script>';
	}
}