<?php

include_once 'controller/Controller.class.php';

class HomeController extends Controller {
	
	function index() {
		include_once 'view/tableau_missions2.php';
	}

}

?>
