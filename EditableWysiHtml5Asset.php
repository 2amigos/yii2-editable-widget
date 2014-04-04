<?php
/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
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
    public $sourcePath = '@vendor/2amigos/yii2-editable-widget/assets/wysihtml5';

    public $depends = [
        'dosamigos\editable\EditableBootstrapAsset'
    ];

    public function init()
    {
        $this->css[] = YII_DEBUG ? 'vendor/bootstrap3-wysihtml5.css' : 'vendor/bootstrap3-wysihtml5.min.css';
        $this->js[] = YII_DEBUG ? 'vendor/wysihtml5-0.3.0.js' : 'vendor/wysihtml5-0.3.0.min.js';
        $this->js[] = YII_DEBUG ? 'vendor/bootstrap3-wysihtml5.all.min.js' : 'vendor/bootstrap3-wysihtml5.all.min.js';
        $this->js[] = 'bootstrap-editable-wysihtml5.js';
    }
}