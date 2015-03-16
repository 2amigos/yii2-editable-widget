<?php
/**
 *
 * TestCKEditorWidgetAsset.php
 *
 * Date: 02/03/15
 * Time: 12:24
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 */

namespace tests\data\overrides;

use dosamigos\editable\EditableSelect2Asset;

class TestEditableSelect2Asset extends EditableSelect2Asset
{
    public $sourcePath = '@tests/../../src/assets';


    public $depends = [
        'tests\data\overrides\TestEditableBootstrapAsset',
        'dosamigos\editable\Select2Asset',
    ];
}
