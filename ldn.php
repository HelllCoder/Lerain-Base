<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "description" content = "Domovská stránka a vývojová základna LerajnSoft-u">
        <meta name="author" content="Benji" >
		<link rel = "stylesheet" href = "styles.css" />
		<link rel = "stylesheet" href = "ldn/ldn.css" />
		<title> LerainSoft-ware Base | LDN</title>
    </head>
    
    <body>
        <nav id = "main">
            <a title = "Title page" href = "index.php"> Home </a>
			<a title = "What's new in Lerainsoft?" href = "news.php"> News </a>
            <a title = "Who is in our team?" href = "team.php"> Team </a>
            <a title = "Our products" href = "products.php"> Products </a>
			<a title = "Services offered by us" href = "services.php"> Services </a>
            <a id = "actual" title = "Lerainsoft Developer Network" href = "ldn.php"> LDN </a>
        </nav>
        
		<main>
			<article class = "lerainBox">
			<?
				session_start();
             	if(isset($_SESSION['login'])){
					header("location: ldn/home.php");
				}
	        ?>
			<p class = "lerainText"> <strong>LDN</strong> [Lerain Developer Network] is coordination place for Lerain developers. We are planning and discussing all development here.</p>
			</article>
			<div id = "logForm">
				<h3> LDN login </h3>
				<form action = "login.php" method = "POST">
					<input class = "modernInput" type = "text" name = "username" placeholder = "Username" />
					<input class = "modernInput" type = "password" name = "password" placeholder = "Password" />
					<input type = "submit" value = "Login" />
				</form>
			</div>
		</main>	
		
        <? include "footer.html"; ?>   
	</body>
</html>