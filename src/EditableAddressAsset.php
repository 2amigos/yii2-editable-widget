<?php
/**
 * @copyright Copyright (c) 2013-2017 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\editable;

use yii\web\AssetBundle;

/**
 * EditableAddressAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\editable
 */
class EditableAddressAsset extends AssetBundle
{
    public $sourcePath = '@vendor/2amigos/yii2-editable-widget/src/assets/address';

    public $css = [
        'bootstrap-editable-address.css'
    ];

    public $js = [
        'bootstrap-editable-address.js'
    ];

    public $depends = [
        'dosamigos\editable\EditableBootstrapAsset'
    ];
}
