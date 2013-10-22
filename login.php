<?php 
ob_start();
/*
* Tetno soubor zjisti zda se takovy uzivatel s takovym heslem v databazi nachazi. 
* Pokud ano, do sessions o tom ulozime informaci.
* Jinak se samozrejme presmerujeme zpet a dame uzivateli vedet, ze zadal spatne udaje
*/

session_start(); // Budeme pracovat se session, musíme je nastartovat.

if(isset($_POST['username']))
{
	require 'db.php';
	$name = $_POST['username'];
	$pass = md5($_POST['password']);
	$successPage = "ldn/home.php";
	$failPage = "authfailed.php";
	$query = MySQL_Query("SELECT * FROM `ldn` WHERE `jmeno` = '$name' and `heslo` = '$pass'") or die (mysql_error());
	// Vybereme uživatele se zadaným jménem a heslem
	$Vysledek = mysql_fetch_array($query);
	$Vysledek['jmeno']; 
	if($Vysledek['jmeno'])
	{ // pokud tato proměnná obsahuje data, bylo zadané správné jméno a heslo
		// Do sessions si uložíme pár informací o přihlášeném
		$_SESSION['login'] = $Vysledek['jmeno'];
		$_SESSION['funkce'] = $Vysledek['funkce'];
		header("location: $successPage"); // přesměrujeme na index
	}
	else
	{
		echo "yds";
		header("location: authfailed.php"); // špatně zadané údaje
		mysql_free_result($query);
		ob_end_flush();
	}
	var_dump($query);
}	
?>
