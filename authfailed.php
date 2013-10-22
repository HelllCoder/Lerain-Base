<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "description" content = "Domovská stránka a vývojová základna LerajnSoft-u">
        <meta name="author" content="Benji" >
        <link rel = "stylesheet" title = "Page's CSS" href = "styles.css">
        <title> LerainSoft-ware Base | LDN</title>
    </head>
    
    <body>
        <nav id = "main">
            <a title = "Title page" href = "index.php"> Home </a>
			<a title = "What's new in Lerainsoft?" href = "news.php"> News </a>
            <a title = "Who is in our team?" href = "team.php"> Team </a>
            <a title = "Our products" href = "products.php"> Products </a>
			<a title = "Services offered by us" href = "services.php"> Services </a>
            <a id = "current" title = "Lerainsoft Developer Network" href = "ldn.php"> LDN </a>
        </nav>
        
		<main>
			
			<article class = "lerainBox">
				<p class = "lerainText error"> You entered wrong username/password. </p>
			</article>
			
		</main>	
		
        <? include "footer.html"; ?>   
	</body>
</html>
