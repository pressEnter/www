<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name' => 'pressEnter',
	'language' => 'es',
	// preloading 'log' component
	'preload' => array('log'),

	// autoloading model and component classes
	'import' => array(
		'application.models.*',
		'application.components.*',
		'application.models.forms.*',
		'application.helpers.*',
	),
	'modules' => array(
		// uncomment the following to enable the Gii tool
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'password' => '1234',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters' => array('127.0.0.1','::1'),
		),
		'admin' => array(),
	),

	// application components
	'components' => array(
		'user' => array(
			// enable cookie-based authentication
			'allowAutoLogin' => true,
		),
		// uncomment the following to enable URLs in path-format
		'urlManager' => array(
			'urlFormat' => 'path',
			'showScriptName' => false,
			'rules' => array(
				'' => 'site/index', // homepage
				'contact' => 'site/contact',
				'about-us' => 'site/page/view/about-us',
				// training, services, projects
				'<controller:(training|services|projects)>/<item:[a-z0-9\-]+>' => '<controller>/details',
				// news
				'news/read/<id:\d+>/<slug:[0-9a-zA-Z\-]+>' => 'news/read',
				//
				// default rules
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			),
		),
		'db' => require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'db.php'),
		'errorHandler' => array(
			// use 'site/error' action to display errors
            'errorAction' => 'site/error', // http://www.yiiframework.com/forum/index.php/topic/3856-custom-404-page-not-found-in-yii/
        ), 
		'log' => array(
			'class' => 'CLogRouter',
			'routes' => array(
				array(
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning',
				),
				// uncomment the following to show log messages on web pages				
				array(
					'class' => 'CWebLogRoute',
				),
				
			),
		), // END log
		'coreMessages' => array(
			'basePath' => 'protected/messages',
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params' => array(
		// this is used in contact page
		'adminEmail' => 'webmaster@example.com',
		'contactEmail' => 'info@pressenter.com.ar',
	),
	'theme' => 'v1',
	'layout' => '',
);
