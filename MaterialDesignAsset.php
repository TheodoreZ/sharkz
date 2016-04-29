<?php 
namespace theodorez\material;
use yii\web\AssetBundle;
/**
 * 
 **/
class MaterialDesignLiteAsset extends AssetBundle
{
	public 	$sourcePath = '@bower/material-design';
	public $css = [
		'material.min.css'
	];
	public $js = [
		'material.min.js'
	];
}
?>
