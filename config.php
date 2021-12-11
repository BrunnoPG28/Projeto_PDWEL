<?php

require 'environment.php';

global $config;
$config = array();

if (ENVIRONMENT == 'off'){
    define("BASE_URL", "https://localhost/agenda/");

    $config['dbname'] = 'agenda' ;
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';

}else{
    define("BASE_URL", "https://agenda.000webhostapp.com/");

    $config['dbname'] = 'id8411021_loja';     //loja
    $config['host'] = 'localhost';   //127.0.0.1
    $config['dbuser'] =  'id8411021_root';
    $config['dbpass'] =  'root123';
}

global $db;

try{
$db = new PDO("mysql:dbname=".$config['dbname']."; host=".$config['host'] , $config['dbuser'] , $config['dbpass']);
}catch (PDOException $e)
{
    echo "Erro" .$e->getMessage();
    exit;
}