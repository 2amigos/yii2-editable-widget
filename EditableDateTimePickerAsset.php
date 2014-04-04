<?php
/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\editable;

use yii\web\AssetBundle;

/**
 * EditableDateTimePickerAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\editable
 */
class EditableDateTimePickerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/2amigos/yii2-editable-widget/assets/datetimepicker';

    public $depends = [
        'dosamigos\editable\EditableBootstrapAsset'
    ];

    public function init()
    {
        $this->css[] = YII_DEBUG ? 'vendor/css/bootstrap-datetimepicker.css' : 'vendor/css/bootstrap-datetimepicker.min.css';
        $this->js[] = YII_DEBUG ? 'vendor/js/bootstrap-datetimepicker.js' : 'vendor/js/bootstrap-datetimepicker.min.js';
        $this->js[] = 'bootstrap-editable-datetimepicker.js';
        parent::init();
    }

} 