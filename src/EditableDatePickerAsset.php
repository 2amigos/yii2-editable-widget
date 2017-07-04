<?php
/**
 * @copyright Copyright (c) 2013-2017 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\editable;

use yii\web\AssetBundle;

/**
 * EditableDatePickerAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\editable
 */
class EditableDatePickerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/2amigos/yii2-editable-widget/src/assets/datepicker';

    public $css = [
        'vendor/css/datepicker3.css'
    ];

    public $js = [
        'vendor/js/bootstrap-datepicker.js',
        'bootstrap-editable-datepicker.js'
    ];

    public $depends = [
        'dosamigos\editable\EditableBootstrapAsset'
    ];
}
