<?php

class Errors extends Controller {

	function __construct()
	{
                parent:: __construct();   
	}

	
	function index()
	{
		$template = $this->loadView("Errors");
		$template->render();
	}
	
	function ctrl404()
	{
		echo '<h1>404 Error</h1>';
		echo '<p>This page is not available at the moment</p>';
	}
    
}
?>
