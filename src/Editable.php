<?php
/**
 * @copyright Copyright (c) 2013-2017 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\editable;

use yii\base\InvalidConfigException;
use yii\db\ActiveRecordInterface;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\widgets\InputWidget;

/**
 * Editable renders the amazing x-editable js plugin from vitalets. For more information please visit the
 * [plugin site](http://vitalets.github.io/x-editable/index.html).
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\editable
 */
class Editable extends InputWidget
{
    /**
     * @var string the type of input. Type of input.
     */
    public $type = 'text';
    /**
     * @var string the Mode of editable, can be popup or inline.
     */
    public $mode = 'inline';
    /**
     * @var string optional input id
     */
    public $id;
    /**
     * @var string placement of bootstrap popover
     */
    public $placement = 'top';
    /**
     * @var string|array Url for submit, e.g. '/post'. If function - it will be called instead of ajax. Function should
     * return deferred object to run fail/done callbacks.
     *
     * ```
     * url: function(params) {
     *  var d = new $.Deferred;
     *  if(params.value === 'abc') {
     *      return d.reject('error message'); //returning error via deferred object
     *  } else {
     *      //async saving data in js model
     *      someModel.asyncSaveMethod({
     *          ...,
     *          success: function(){
     *              d.resolve();
     *          }
     *      });
     *      return d.promise();
     *  }
     * }
     * ```
     */
    public $url;
    /**
     * @var array the options for the X-editable.js plugin.
     * Please refer to the X-editable.js plugin web page for possible options.
     * @see http://vitalets.github.io/x-editable/docs.html#editable
     */
    public $clientOptions = [];
    /**
     * @var array the event handlers for the X-editable.js plugin.
     * Please refer to the X-editable.js plugin web page for possible options.
     * @see http://vitalets.github.io/x-editable/docs.html#editable
     */
    public $clientEvents = [];

    /**
     * Initializes the widget.
     * This method will register the bootstrap asset bundle. If you override this method,
     * make sure you call the parent implementation first.
     */
    public function init()
    {
        if ($this->url === null) {
            throw new InvalidConfigException("'Url' property must be specified.");
        }
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $value = $this->value;
        if ($this->hasModel() && $value === null) {
            $show = ArrayHelper::getValue($this->model, $this->attribute);
        } elseif (is_callable($value)) {
            $show = call_user_func($value, $this->model);
        } else {
            $show = $value;
        }

        echo Html::a($show, null, $this->options);

        $this->registerClientScript();
    }

    /**
     * Registers X-Editable plugin and the related events
     */
    protected function registerClientScript()
    {
        $view = $this->getView();
        $language = ArrayHelper::getValue($this->clientOptions, 'language');

        switch ($this->type) {
            case 'address':
                EditableAddressAsset::register($view);
                break;
            case 'combodate':
                EditableComboDateAsset::register($view);
                break;
            case 'date':
                if ($language) {
                    EditableDatePickerAsset::register(
                        $view
                    )->js[] = 'vendor/js/locales/bootstrap-datetimepicker.' . $language . '.js';
                } else {
                    EditableDatePickerAsset::register($view);
                }
                break;
            case 'datetime':
                if ($language) {
                    EditableDateTimePickerAsset::register(
                        $view
                    )->js[] = 'vendor/js/locales/bootstrap-datetimepicker.' . $language . '.js';
                } else {
                    EditableDateTimePickerAsset::register($view);
                }
                break;
            case 'select2':
                EditableSelect2Asset::register($view);
                break;
            case 'wysihtml5':
                $language = $language ?: 'en-US';
                EditableWysiHtml5Asset::register(
                    $view
                )->js[] = 'vendor/locales/bootstrap-wysihtml5.' . $language . '.js';
                break;
            default:
                EditableBootstrapAsset::register($view);
        }

        $id = ArrayHelper::remove($this->clientOptions, 'selector', '#' . $this->options['id']);

        // Escape meta-characters in element Id
        // http://api.jquery.com/category/selectors/
        // This actually only needs to be done for dots, since Html::getInputId
        // will enforce word-only characters.
        $id = preg_replace('/([.])/', '\\\\\\\$1', $id);

        $this->clientOptions['url'] = $this->url instanceof JsExpression ? $this->url : Url::toRoute($this->url);
        $this->clientOptions['type'] = $this->type;
        $this->clientOptions['mode'] = $this->mode;
        $this->clientOptions['name'] = $this->attribute ?: $this->name;
        $this->clientOptions['placement'] = $this->placement;
        $pk = ArrayHelper::getValue(
            $this->clientOptions,
            'pk',
            $this->hasActiveRecord() ? $this->model->getPrimaryKey() : null
        );
        $this->clientOptions['pk'] = base64_encode(serialize($pk));
        if ($this->hasActiveRecord() && $this->model->isNewRecord) {
            $this->clientOptions['send'] = 'always'; // send to server without pk
        }

        $options = Json::encode($this->clientOptions);
        $js = "jQuery('$id').editable($options);";
        $view->registerJs($js);

        if (!empty($this->clientEvents)) {
            $js = [];
            foreach ($this->clientEvents as $event => $handler) {
                $js[] = "jQuery('$id').on('$event', $handler);";
            }
            $view->registerJs(implode("\n", $js));
        }
    }

    /**
     * To ensure that `getPrimaryKey()` and `getIsNewRecord()` methods are implemented in model.
     * You can override this method if your model in not instance of `ActiveRecord` but simulates its behavior with these methods.
     * @return bool
     */
    protected function hasActiveRecord()
    {
        return $this->hasModel() && $this->model instanceof ActiveRecordInterface;
    }
}
