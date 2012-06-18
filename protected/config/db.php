<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
//  'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
    'connectionString' => 'mysql:host=localhost;dbname=pressenter',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
);
