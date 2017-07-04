X-Editable Widget for Yii2
==========================

[![Latest Version](https://img.shields.io/github/tag/2amigos/yii2-editable-widget.svg?style=flat-square&label=release)](https://github.com/2amigos/yii2-editable-widget/tags)
[![Software License](https://img.shields.io/badge/license-BSD-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/2amigos/yii2-editable-widget/master.svg?style=flat-square)](https://travis-ci.org/2amigos/yii2-editable-widget)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/2amigos/yii2-editable-widget.svg?style=flat-square)](https://scrutinizer-ci.com/g/2amigos/yii2-editable-widget/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/2amigos/yii2-editable-widget.svg?style=flat-square)](https://scrutinizer-ci.com/g/2amigos/yii2-editable-widget)
[![Total Downloads](https://img.shields.io/packagist/dt/2amigos/yii2-editable-widget.svg?style=flat-square)](https://packagist.org/packages/2amigos/yii2-editable-widget)

Renders a [X-Editable Input](http://vitalets.github.io/x-editable/index.html) allowing to use the amazing inline capabilities of [X-Editable Plugin](http://vitalets.github.io/x-editable/index.html). 

Important Note
--------------
We decided to port only the Bootstrap 3 capabilities of [X-Editable Plugin](http://vitalets.github.io/x-editable/index.html) due to the requirements of our projects. We have done quite a lot of work: 

- The original library has been modified to port it to Yii2. Plugins that we thought didn't belong to the core, we extracted them and implemented them as separated external input types (address, combodate, datepicker, datetimepicker, select2 and wysihtml5 plugins). We thought that separating external types will help everybody to isolate problems and be able to improve the library much better.
- Plugins have been all updated to their latest versions 
- Fixed datepicker and datetimepicker types to work with Bootstrap 3 
- Refactored widget code to make it easier to understand
- We have not included **EditableColumn**, **EditableListView**, or **EditableDetailView** because we believe they correspond to a different package. They will be developed independently. 

So, if you have issues to fix, please remember, **THIS IS NOT** an exact copy of X-Editable, this is a Bootstrap 3 enhanced X-Editable plugin ported to Yii2. 

We welcome everybody to improve this library with their amazing Pull Requests :) and we hope that this will increase the productivity of your Yii2 experience.

So keep this in mind: 

- Widget is based on [X-Editable](http://vitalets.github.io/x-editable/) not on [X-Editable for Yii](http://x-editable.demopage.ru/)
- It does not work with JQuery UI or as plain JQuery, just Bootstrap and latest version only (not 2.3.2 sorry)
- If you wish to help improve the library do it, but do not update the library thinking this is the same as X-Editable source, it has been modified. 
- The supported types are:
    - text 
    - textarea 
    - select 
    - date 
    - datetime 
    - combodate 
    - html5 types 
    - checklist 
    - wysihtml5
    - select2 
    - No typeaheadJs - ready for the challenge?


Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require 2amigos/yii2-editable-widget:~1.0
```
or add

```json
"2amigos/yii2-editable-widget" : "~1.0"
```

to the require section of your application's `composer.json` file.


Usage
-----
There is an amazing site made by [Vitaliy Potapov](https://github.com/vitalets) which shows how to configure the widget. We are not going to explain how to use each one of the again and we encourage you to visit [the documentation section of the plugin's site](http://vitalets.github.io/x-editable/docs.html)

```
<?php
use dosamigos\editable\Editable;

// as a widget with a model and a datetime type
?>

<?= Editable::widget( [
    'model' => $model,
    'attribute' => 'created_at',
    'url' => 'site/test',
    'type' => 'datetime',
    'mode' => 'pop',
    'clientOptions' => [
        'placement' => 'right',
        'format' => 'yyyy-mm-dd hh:ii',
        'viewformat' => 'dd/mm/yyyy hh:ii',
        'datetimepicker' => [
            'orientation' => 'top auto'
           ]
    ]
]);?>
<?php 

// as a widget without a model and a select2 type
?>
<?= Editable::widget( [
    'name' => 'country_code',
    'value' => '',
    'url' => 'site/test',
    'type' => 'select2',
    'mode' => 'pop',
    'clientOptions' => [
        'pk' => 2,
        'placement' => 'right',
        'select2' => [
            'width' => '124px'
        ],
        'source' => [
            ['id' => 'gb', 'text' => 'Great Britain'],
            ['id' => 'es', 'text' => 'Spain'],
        ],
    ]
]);?>

<?php 
// with an ActiveForm instance displayed as a address input 

use dosamigos\editable\Editable;
?>
<?= $form->field($model, 'address')->widget(Editable::className(), [
    'url' => 'site/test',
    'type' => 'address'
]);?>

<?php 
// as datetime type input
<?= $form->field($model, 'created_at')->widget(Editable::className(), [
    'url' => 'site/test',
    'type' => 'datetime',
    'mode' => 'pop',
    'clientOptions' => [
        'placement' => 'right',
        'format' => 'yyyy-mm-dd hh:ii',
        'viewformat' => 'dd/mm/yyyy hh:ii',
        'datepicker' => [
            'orientation' => 'top auto'
        ]            
    ]
]);?>
```

Testing
-------

To test the extension, is better to clone this repository on your computer. After, go to the extensions folder and do
the following (assuming you have `composer` installed on your computer): 

```bash 
$ composer install --no-interaction --prefer-source --dev
```
Once all required libraries are installed then do: 

```bash 
$ vendor/bin/phpunit
```


Further Information
-------------------
Please, check the [X-Editable Plugin](http://vitalets.github.io/x-editable/index.html) documentation for further 
information about its configuration options. 

Contributing
------------

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

Credits
-------

- [Antonio Ramirez](https://github.com/tonydspaniard)
- [All Contributors](../../contributors)

License
-------

The BSD License (BSD). Please see [License File](LICENSE.md) for more information.


> [![2amigOS!](http://www.gravatar.com/avatar/55363394d72945ff7ed312556ec041e0.png)](http://www.2amigos.us)  
<i>Custom Software | Web & Mobile Software Development</i>  
[www.2amigos.us](http://www.2amigos.us)
