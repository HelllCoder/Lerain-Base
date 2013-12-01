<?php 
class Database
{
static $instance;
private $connection;
function initDB($host,$username,$password,$dbname)
{
	$this->connection = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
	
}
static function getInstance()
{
	if(self::$instance == NULL):
		self:$instance = self;
	return self::$instance;
}
function getOne($query,$args)
{
	$stat = $this->connection->prepare($query);
	$stat->execute($args);
	return $stat->fetch();
	
}
fun
	}
