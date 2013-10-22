<?php
/*
* Pokud uživatel není přihlášený, místo obsahu se mu ukáže tato hláška.
*/

	ob_start();
	session_start();
	// odhlaseni autora
	if(isset($_SESSION['login'])) {
	  Session_Start();
	  Session_Destroy();
	  header("location: ../ldn.php");
	}
	else
		header("location: ../index.php");
	ob_end_flush();

?>