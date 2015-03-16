<?php
/**
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\editable;

use yii\web\AssetBundle;

/**
 * EditableSelect2Asset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\editable
 */
class EditableSelect2Asset extends AssetBundle
{
    public $sourcePath = '@vendor/2amigos/yii2-editable-widget/src/assets/select2';

    public $js = [
        'bootstrap-editable-select2.js'
    ];

    public $depends = [
        'dosamigos\editable\EditableBootstrapAsset',
        'dosamigos\editable\Select2Asset',
    ];
}