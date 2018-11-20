<?php 

#Regional settings
$config['this_app']['timezone'] = [
	'region' => 'Asia\Dhaka',
	'UTC' => '+6',
];

#Language settings
$config['this_app']['available_language'] = [
	'en' => [
		'name'=>'English',
		'local_name'=>'English',
		'iso_code'=>'',
		'path'=>'',
		'icon'=>'',
	],
	'bn' => [
		'name'=>'Bangla',
		'local_name'=>'বাংলা',
		'iso_code'=>'',
		'path'=>'',
		'icon'=>'',
	],
];

$config['this_app']['default_language'] = 'en';

#Currency settings
$config['this_app']['available_currencies'] = [
	'usd' => [
		'name'=>'U. S. Dollar',
		'sign'=>'$',
		'exchange_rate'=>1,
	],
	'bdt' => [
		'name' => 'Taka',
		'sign' => '৳',
		'exchange_rate' => 0.0125,
	],
];

$config['this_app']['default_currency'] = 'usd';

#Unit settings
$config['this_app']['unit'] = [
	'length' => 'm',
	'weight' => 'Kg',
];

#Template settings
$config['this_app']['admin_template'] = '';
$config['this_app']['user_template'] = '';
$config['this_app']['site_template'] = '';