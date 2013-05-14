<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'id' => 'app',
	'name'=>'Yii2.0 Public Preview',

	'preload'=>array('log'),
	
	// application components
	'components'=>array(
		'cache' => array(
			'class' => 'yii\caching\DummyCache',
		),
		'assetManager' => array(
 			'bundles' => require(__DIR__ . '/assets.php'),
 		),
		/*
		'urlManager'=>array(
			'class'=>'yii\web\UrlManager',
			'rules'=>array(
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),  
		),
		*/
		/*
		'db' => array(
			'class' => 'yii\db\Connection',
			'dsn' => 'mysql:host=localhost;dbname=test',
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix'=>'tbl_',
			'enableSchemaCache'=> !YII_DEBUG,
		),*/
		'log'=>array(
			'class'=>'yii\logging\Router',
			'targets'=>array(
				'file' => array(
					'class'=>'yii\logging\FileTarget',
 					'levels'=> array('error', 'warning'),
					'categories' => array('yii\*'),
				),  
			),  
 		),
	),

	// application-level parameters that can be accessed
	// using Yii::$app->params['paramName']
	'params'=>array(),
);
