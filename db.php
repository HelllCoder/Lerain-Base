<?php 
try
{
 $spojeni = new PDO("mysql:host=localhost;dbname=czsrv","lerainsoft","lerainsoft273",array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
	$spojeni->query("SET");
}
catch(Exception e)
{
	die("Database Error!".$e->getMessage());
	
}
?>
