<?php
require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development'){
    define("BASE_URL", "//wesleyz95.000webhostapp.com/");
    $config['dbname'] = '*****';
    $config['host'] = '*****';
    $config['dbuser'] = '*****';
    $config['dbpass'] = '*****';
}else{

}

global $db;

try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";port=3308;host=".$config['host'], $config['dbuser'], $config['dbpass']);
}catch(PDOException $e){

    echo "ERRO:". $e->getMessage();
    exit;

}