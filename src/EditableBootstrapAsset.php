<?php
/**
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\editable;

use yii\web\AssetBundle;

/**
 * EditableBootstrapAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\editable
 */
class EditableBootstrapAsset extends AssetBundle
{
    public $sourcePath = '@vendor/2amigos/yii2-editable-widget/src/assets/editable';

    public $css = [
        'css/bootstrap-editable.css'
    ];

    public $js = [
        'js/bootstrap-editable.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}