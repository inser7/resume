<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
return array(

    'sourceLanguage'=>'en',
    'language'=>'en',
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'kolcov',

	// preloading 'log' component
	'preload'=>array('log',
		'bootstrap'

		),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',

        'application.modules.user.models.*',
        'application.modules.user.components.*',
	),


	 'modules'=>array('user',
	 	 	 'admin',
        'gii'=>array(
            'generatorPaths'=>array(
                'bootstrap.gii',
            ),
            'class'=>'system.gii.GiiModule',
            'password'=>'123',
        ),
    ),



	// application components
	'components'=>array(
        'request'=>array(
            'enableCookieValidation'=>true,
            'enableCsrfValidation'=>true,
        ),
		'user'=>array(
			'returnUrl' => array('/admin/'),
			// enable cookie-based authentication
			'loginUrl'=>array('user/login'),
			'allowAutoLogin'=>true,
		),
			'bootstrap'=>array(
			'class'=>'ext.bootstrap.components.Bootstrap',
			'responsiveCss'=>true,
			),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString'=>'sqlite:protected/data/resumebase.db',
            'tablePrefix'=>'tbl_',
			// 'connectionString' => 'mysql:host=localhost;dbname=kolcov',
			// 'emulatePrepare' => true,
			// 'username' => 'root',
			// 'password' => '',
			// 'charset' => 'utf8',
			// 'tablePrefix' => 'tbl_',
			// 'enableProfiling'       => YII_DEBUG, // Disable in production
			// 'enableParamLogging'    => YII_DEBUG, // Disable in production
			// 'emulatePrepare'        => true,
			// 'schemaCachingDuration' => YII_DEBUG ? 0 : 3600,
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
	 	'urlManager'=>array(
                'class'=>'application.components.UrlManager',
	            'urlFormat'=>'path',
	            'showScriptName' => false,
	            'rules'=>array(
                    '<language:(ru|en)>/' => 'resume/index',
                    '<language:(ru|en)>/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
	            	'admin/' => 'user/login',
	                 //'turbo/contact'=>'turbo/contact',
	            ),
		),
		// 'log'=>array(
		// 	'class'=>'CLogRouter',
		// 	'routes'=>array(
		// 		array(
		// 			'class'=>'CFileLogRoute',
		// 			'levels'=>'error, warning',
		// 		),
		// 		// uncomment the following to show log messages on web pages
		// 		/*
		// 		array(
		// 			'class'=>'CWebLogRoute',
		// 		),
		// 		*/
		// 	),
		// ),
		'log'=>YII_DEBUG===true ? require('logging.php') : null,
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
 	'defaultController' => 'resume',
	'params'=>require(dirname(__FILE__).'/params.php'),
);