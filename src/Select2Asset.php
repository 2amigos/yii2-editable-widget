<?php
/**
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\editable;

use yii\web\AssetBundle;

/**
 * Select2Asset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\editable
 */
class Select2Asset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/select2';

    public $css = [
        'select2.css'
    ];

    public function init()
    {
        $this->js[] = YII_DEBUG ? 'select2.js' : 'select2.min.js';
    }
}
