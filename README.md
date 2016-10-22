A Classified Ads Extension
==========================
this is a classified ads extension for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist mohammad-adibi/yii2-classifieds "*"
```

or add

```
"mohammad-adibi/yii2-classifieds": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed

1. add into modules config in your main config file

'modules' => [
    'classifieds' =>  [
        'class' => 'classifieds\Module'
    ]       
]
