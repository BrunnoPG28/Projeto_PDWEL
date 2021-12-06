<?php
class controller
{
	protected $db;

	public function __construct()
	{
		global $config;

        $this->db = new PDO("mysql:dbname=".$config['dbname']."; host=".$config['host'] , $config['dbuser']  , $config['dbpass']);
	}

	public function loadView($viewNome, $viewData = array())
	{
		extract($viewData);
		require 'views/' . $viewNome. '.php';

	}

	public function loadTemplate($viewNome, $viewData = array())
	{
		//extract($viewData);	
		include 'views/template.php';
	}

	public function loadViewInTemplate($viewNome, $viewData)
	{
        extract($viewData);		
		include 'views/'.$viewNome. '.php';
	}
}