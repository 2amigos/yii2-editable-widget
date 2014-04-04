<?php
/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
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
    public $sourcePath = '@vendor/2amigos/yii2-editable-widget/editable/assets/select2';

    public $css = [
        'vendor/select2.css'
    ];

    public $js = [
        'bootstrap-editable-select2.js'
    ];

    public $depends = [
        'dosamigos\editable\EditableBootstrapAsset'
    ];

    public function init()
    {
        $this->js[] = YII_DEBUG ? 'vendor/select2.js' : 'vendor/select2.min.js';
    }
} 