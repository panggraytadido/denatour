<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'modules'=>[
		'admin' => [
			'class' => 'mdm\admin\Module',
			'layout' => '@vendor/themes/traveler/layouts/backend_main', // it can be '@path/to/your/layout'.
			'controllerMap' => [
				'assignment' => [
					'class' => 'mdm\admin\controllers\AssignmentController',
					'userClassName' => 'common\models\User',
					'idField' => 'user_id'
				],
				'other' => [
					'class' => 'path\to\OtherController', // add another controller
				],
			],
			'menus' => [
				'assignment' => [
					'label' => 'Grand Access' // change label
				],
				'route' => null, // disable menu route
			]
		],
	],
    'components' => [
		'JWT'=>[			
			'class' => 'common\components\JWT',
		],
		  'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		'as access' => [
			'class' => 'mdm\admin\components\AccessControl',
			'allowActions' => [
				'site/*',
			//'admin/*',
			//'some-controller/some-action',
			// The actions listed here will be allowed to everyone including guests.
			// So, 'admin/*' should not appear here in the production, of course.
			// But in the earlier stages of your development, you may probably want to
			// add a lot of actions here until you finally completed setting up rbac,
			// otherwise you may not even take a first step.
        ]
    ],
    ],
];
