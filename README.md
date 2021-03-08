yii2-alisms
===========
Alisms extension for YII2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist silentlun/yii2-alisms "*"
```

or add

```
"silentlun/yii2-alisms": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use silentlun\alisms\AliSms;
$sendsms = new AliSms($accessKeyId, $accessKeySecret);
$response = $sendsms->SendSms($signName, $templateCode, $phoneNumbers, $data);
if ($response->Code == 'OK') {
    return true;
} else {
    return false;
}
```