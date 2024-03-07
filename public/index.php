<?php

$availableRoutes = [
	'homepage', 'config', 'my_config', 'personnal-computer'
];

$route = 'homepage';
if (isset($_GET['page']) && in_array($_GET['page'], $availableRoutes)) {
	$route = $_GET['page'];
}

require  ('../src/views/layout.php');