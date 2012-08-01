<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/protected/yii-1.1.11.58da45/framework/yii.php';
$config=require(dirname(__FILE__).'/protected/config/main.php');
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',false);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
if (file_exists(dirname(__FILE__) .'/protected/config/main.local.php')) {
    $local = require(dirname(__FILE__) .'/protected/config/main.local.php');
    $config = CMap::mergeArray($config, $local);
}
Yii::setPathOfAlias('forms', Yii::getPathOfAlias('application').'/models/forms');
Yii::createWebApplication($config)->run();

