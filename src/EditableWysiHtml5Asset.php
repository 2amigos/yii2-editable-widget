<?php
/**
 * @copyright Copyright (c) 2013-2017 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\editable;

use yii\web\AssetBundle;

/**
 * EditableWysiHtml5Asset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\editable
 */
class EditableWysiHtml5Asset extends AssetBundle
{
    public $sourcePath = '@vendor/2amigos/yii2-editable-widget/src/assets/wysihtml5';

    public $css = [
        'vendor/bootstrap3-wysihtml5.css'
    ];

    public $js = [
        'vendor/wysihtml5-0.3.0.js',
        'vendor/bootstrap3-wysihtml5.all.min.js',
        'bootstrap-editable-wysihtml5.js'
    ];

    public $depends = [
        'dosamigos\editable\EditableBootstrapAsset'
    ];
}
