<?php

require_once '../../../vendor/autoload.php';

$config = new \Doctrine\DBAL\Configuration();

$connectionParams = array(
	'dbname' => 'mydb',
	'user' => 'user',
	'password' => 'secret',
	'host' => 'localhost',
	'driver' => 'pdo_mysql',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

$conn->export->createTable('test', array('name' => array('type' => 'string')));
$conn->execute('INSERT INTO test (name) VALUES (?)', array('jwage'));