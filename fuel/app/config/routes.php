<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	
	'bbs(/:any)' => 'routingtest/entry/$1',
	'(:segmaent)/about' => 'routingtest/about/$1',
	'([0-9]{3})/detail' => 'routingtest/id/$1',
	
	'cal/:year/:month/:day' => 'routingtest/cal',
	'admin/dashbord' => array('admin/index', 'name' => 'admin'),
	
);
