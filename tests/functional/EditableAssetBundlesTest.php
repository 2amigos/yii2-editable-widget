<?php

namespace tests;

use tests\data\overrides\TestEditableAddressAsset;
use tests\data\overrides\TestEditableComboDateAsset;
use tests\data\overrides\TestEditableDatePickerAsset;
use tests\data\overrides\TestEditableDateTimePickerAsset;
use tests\data\overrides\TestEditableSelect2Asset;
use tests\data\overrides\TestEditableWysiHtml5Asset;
use yii\web\AssetBundle;

class EditableAssetBundlesTest extends TestCase
{
    public function testEditableAddressAssetRegister()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        TestEditableAddressAsset::register($view);
        $this->assertEquals(6, count($view->assetBundles));
        $this->assertArrayHasKey('yii\\web\\JqueryAsset', $view->assetBundles);
        $this->assertTrue(
            $view->assetBundles['tests\\data\\overrides\\TestEditableAddressAsset'] instanceof AssetBundle
        );
        $content = $view->renderFile('@tests/data/views/rawlayout.php');
        $this->assertContains('jquery.js', $content);
        $this->assertContains('bootstrap.js', $content);
        $this->assertContains('bootstrap-editable-address.js', $content);
    }

    public function testEditableComboDateAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        TestEditableComboDateAsset::register($view);
        $this->assertEquals(6, count($view->assetBundles));
        $this->assertArrayHasKey('yii\\web\\JqueryAsset', $view->assetBundles);
        $this->assertTrue(
            $view->assetBundles['tests\\data\\overrides\\TestEditableComboDateAsset'] instanceof AssetBundle
        );
        $content = $view->renderFile('@tests/data/views/rawlayout.php');
        $this->assertContains('jquery.js', $content);
        $this->assertContains('bootstrap.js', $content);
        $this->assertContains('bootstrap-editable-combodate.js', $content);
    }

    public function testEditableDatePickerAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        TestEditableDatePickerAsset::register($view);
        $this->assertEquals(6, count($view->assetBundles));
        $this->assertArrayHasKey('yii\\web\\JqueryAsset', $view->assetBundles);
        $this->assertTrue(
            $view->assetBundles['tests\\data\\overrides\\TestEditableDatePickerAsset'] instanceof AssetBundle
        );
        $content = $view->renderFile('@tests/data/views/rawlayout.php');
        $this->assertContains('jquery.js', $content);
        $this->assertContains('bootstrap.js', $content);
        $this->assertContains('bootstrap-editable-datepicker.js', $content);
    }

    public function testEditableDateTimePickerAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        TestEditableDateTimePickerAsset::register($view);
        $this->assertEquals(6, count($view->assetBundles));
        $this->assertArrayHasKey('yii\\web\\JqueryAsset', $view->assetBundles);
        $this->assertTrue(
            $view->assetBundles['tests\\data\\overrides\\TestEditableDateTimePickerAsset'] instanceof AssetBundle
        );
        $content = $view->renderFile('@tests/data/views/rawlayout.php');
        $this->assertContains('jquery.js', $content);
        $this->assertContains('bootstrap.js', $content);
        $this->assertContains('bootstrap-editable-datetimepicker.js', $content);
    }

    public function testEditableWysiHtml5PickerAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        TestEditableWysiHtml5Asset::register($view);
        $this->assertEquals(6, count($view->assetBundles));
        $this->assertArrayHasKey('yii\\web\\JqueryAsset', $view->assetBundles);
        $this->assertTrue(
            $view->assetBundles['tests\\data\\overrides\\TestEditableWysiHtml5Asset'] instanceof AssetBundle
        );
        $content = $view->renderFile('@tests/data/views/rawlayout.php');
        $this->assertContains('jquery.js', $content);
        $this->assertContains('bootstrap.js', $content);
        $this->assertContains('bootstrap-editable-wysihtml5.js', $content);
    }

    public function testEditableSelect2Asset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        TestEditableSelect2Asset::register($view);
        $this->assertEquals(7, count($view->assetBundles));
        $this->assertArrayHasKey('yii\\web\\JqueryAsset', $view->assetBundles);
        $this->assertTrue(
            $view->assetBundles['tests\\data\\overrides\\TestEditableSelect2Asset'] instanceof AssetBundle
        );
        $content = $view->renderFile('@tests/data/views/rawlayout.php');
        $this->assertContains('jquery.js', $content);
        $this->assertContains('bootstrap.js', $content);
        $this->assertContains('select2.js', $content);
        $this->assertContains('bootstrap-editable-select2.js', $content);
    }
}
