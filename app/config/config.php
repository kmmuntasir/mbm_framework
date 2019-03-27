<?php
	
	session_start();
	require('db.php');
	require('app/library/lib.php');

	$_SESSION['rootpath'] = 'http://localhost/custom_framework/';

	$_SESSION['controller_path'] 	= 'app/controller/';
	$_SESSION['model_path'] 		= 'app/model/';
	$_SESSION['library_path'] 		= 'app/library/';
	$_SESSION['view_path'] 			= 'app/view/';

	$_SESSION['default_controller'] = 'main';


	library('l_common');
	library('l_url');
	library('l_db');

?>