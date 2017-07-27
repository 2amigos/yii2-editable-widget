<?php
/**
 * @copyright Copyright (c) 2013-2017 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

namespace dosamigos\editable;

use yii\web\AssetBundle;

class EditableComboDateAsset extends AssetBundle
{
    public $sourcePath = '@vendor/2amigos/yii2-editable-widget/src/assets/combodate';

    public $js = [
        'vendor/moment-with-langs.min.js',
        'vendor/combodate.js',
        'bootstrap-editable-combodate.js'
    ];

    public $depends = [
        'dosamigos\editable\EditableBootstrapAsset'
    ];
}
