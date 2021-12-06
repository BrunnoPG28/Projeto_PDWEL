<?php
class controller
{
	protected $db;

	public function __construct()
	{
		global $config;

        $this->db = new PDO("mysql:dbname=".$config['dbname']."; host=".$config['host'] , $config['dbuser']  , $config['dbpass']);
	}

<<<<<<< HEAD
	public function loadView($viewNome, $viewData = array())
	{
		extract($viewData);
		require 'views/' . $viewNome. '.php';

	}

	public function loadTemplate($viewNome, $viewData = array())
=======
	public function loadView($viewName, $viewData = array())
	{
		extract($viewData);
		require 'views/' . $viewName. '.php';

	}

	public function loadTemplate($viewName, $viewData = array())
>>>>>>> 5c3a1b6e7e558a936952c5b0c2c529b5b29a738d
	{
		//extract($viewData);	
		include 'views/template.php';
	}

<<<<<<< HEAD
	public function loadViewInTemplate($viewNome, $viewData)
	{
        extract($viewData);		
		include 'views/'.$viewNome. '.php';
=======
	public function loadViewInTemplate($viewName, $viewData)
	{
        extract($viewData);		
		include 'views/'.$viewName. '.php';
>>>>>>> 5c3a1b6e7e558a936952c5b0c2c529b5b29a738d
	}
}