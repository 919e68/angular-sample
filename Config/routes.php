<?php

 	Router::connect('/test', array('controller' => 'front', 'action' => 'test'));
	
	Router::connect('/', array('controller' => 'front', 'action' => 'index'));
	Router::connect('/login', array('controller' => 'front', 'action' => 'login'));
	Router::connect('/lock', array('controller' => 'front', 'action' => 'lock'));
	Router::connect('/logout', array('controller' => 'front', 'action' => 'logout'));
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	


	$routes = array(
		'business_permit_applications',
		'assessments',
		'tax_order_payments',
		'business_permits',
		'business_types',
		'business_permit_requirements',
		'business_permit_fees',
		'business_tax_classes',
		'business_permit_fee_classes',
		'business_asset_types'
	);
	
	foreach($routes as $route){
		$url = str_replace('_', '-', $route);
		Router::connect("/$url", array('controller' => $route));
		Router::connect("/$url/:action/*", array('controller' => $route));
	}
	
	CakePlugin::routes();
	require CAKE . 'Config' . DS . 'routes.php';
