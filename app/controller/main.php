<?php

	model('book');

	if(!isset($_GET['page'])) $page = 'home';
	else $page = $_GET['page'];

	switch ($page) {
		case 'home':
			home($page);
			break;

		case 'about':
			about($page);
			break;

		case 'contact':
			contact($page);
			break;
		
		default:
			four();
			break;
	}

	function home($page) {
		$data = array();
		$data['page'] = $page;

		$data['books'] = get_all_books();

		// printer($data['books'][0]);

		view('template', $data);
	}

	function about($page) {
		$data = array();
		$data['page'] = $page;

		view('template', $data);
	}

	function contact($page) {
		$data = array();
		$data['page'] = $page;

		view('template', $data);
	}

	function four() {
		echo '404 Not Found';
	}

?>