<?php
return [
	//全局账号相关配置
	'accounts'=>[
		[
			'name'=>getenv("1_name"),
			'client_id'=> getenv("1_client_id"),
			'tenant_id'=> getenv("1_tenant_id"),
			'client_secret'=> getenv("1_client_secret"),
			'sku_ids'=>[
				'a1学生'=>'314c4481-f395-4525-be8b-2ec4bb1e9d91',
				'a1教职工'=>'94763226-9b3c-4e75-a931-5c89701abe66'
			],
		],
		[
			'name'=>getenv("2_name"),
			'client_id'=> getenv("2_client_id"),
			'tenant_id'=> getenv("2_tenant_id"),
			'client_secret'=> getenv("2_client_secret"),
			'sku_ids'=>[
				'a1学生'=>'314c4481-f395-4525-be8b-2ec4bb1e9d91',
				'a1教职工'=>'94763226-9b3c-4e75-a931-5c89701abe66'
			],
		],
		[
			'name'=>getenv("3_name"),
			'client_id'=> getenv("3_client_id"),
			'tenant_id'=> getenv("3_tenant_id"),
			'client_secret'=> getenv("3_client_secret"),
			'sku_ids'=>[
				'a1教职工'=>'94763226-9b3c-4e75-a931-5c89701abe66'
			],
		],
	],
	
	
	
	'locations'=>[//自己配置，写了几个我常用的
		'中国'=>'CN',
		'台湾'=>'TW',
		'香港'=>'HK',
		'日本'=>'JP',
		'美国'=>'US',
		'新加坡'=>'SG',
		'英国'=>'GB',
		'俄罗斯'=>'RU',
		'德国'=>'DE',
		'法国'=>'FR'
	],
	
	//后台相关配置
	'admin'=>[
		'username'=>getenv("username"),
		'password'=>getenv("userpasswd"),//自行输入密码 https://md5jiami.51240.com/  将32位 小写结果填入
		'invitation_code_num'=>'8',//随机生成的邀请码位数
	],
];
