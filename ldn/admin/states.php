<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "description" content = "Domovská stránka a vývojová základna LerajnSoft-u">
        <meta name="author" content="Benji" >
		<link rel = "stylesheet" href = "../../styles.css">
		<link rel = "stylesheet" href = "../ldn.css">
		<link rel = "stylesheet" href = "admin.css">
        <title> LDN Administration | States</title>
    </head>
    
    <body>
        <nav id = "main">
			<a title = "Title page" href = "../index.php"> Home </a>
			<a title = "What's new in Lerainsoft?" href = "../news.php"> News </a>
			<a title = "Who is in our team?" href = "../team.php"> Team </a>
			<a title = "Our products" href = "../products.php"> Products </a>
			<a title = "Services offered by us" href = "../services.php"> Services </a>
			<a id = "actual" title = "Lerainsoft Developer Network" href = "../home.php"> LDN </a>
        </nav>
        
		<main>
			
			<?
  				session_start();
             	if(isset($_SESSION['login'])){
			?>
			<nav id = "ldn">
				
				<h2 id = "panelSign"> Admin Panel </h2>
				<p id = "headerEnd">Logged admin: <? echo "".$_SESSION['login']."";?> </p>
				<a title = "Home + Chat" href = "home.php"> Home </a>
				<a title = "Tasks for developers" href = "tasks.php"> Tasks </a>
				<a id = "current" title = "States of projects" href = "states.php"> Project states </a>
				<a title = "Place for ideas and new projects" href = "hatchery.php"> Hatchery </a>
				<a title = "Place for graphics and graphic ideas" href = "graphics.php"> Graphics </a>
				<a title = "Place for experiment source codes, tests etc." href = "experiments.php" > Experiments </a>
				<a title = "Programming tutorials by members of LS - we want to learn from each other" href = "wiki.php"> Wiki </a>
				<a title = "Something funny" href = "fun.php"> Fun corner </a>
				<a title = "Return to normal LDN" href = "../home.php"> Back </a>
				
			</nav>
			
			<main id = "ldn">					
				<p> This page is under constrution. </p>
			<?
				}
				else
				{ 
			?>
			<aside class = "lerainBox">
				<p class = "error lerainText"> You are not Lerain administrator. </p>
			</aside>
			<?
				}
			?>
			
		</main>	
	</body>
</html>