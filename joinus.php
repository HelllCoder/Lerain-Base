<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "description" content = "Domovská stránka a vývojová základna LerajnSoft-u">
        <meta name="author" content="Benji" >
        <link rel = "stylesheet" title = "Page's CSS" href = "styles.css">
        <title> LerainSoft-ware Base | Application Form</title>
    </head>
    
    <body>
        <nav id = "main">
            <a title = "Title page" href = "index.php"> Home </a>
			<a title = "What's new in Lerainsoft?" href = "news.php"> News </a>
            <a title = "Who is in our team?" href = "team.php"> Team </a>
            <a title = "Our products" href = "products.php"> Products </a>
			<a title = "Services offered by us" href = "services.php"> Services </a>
            <a title = "Lerainsoft Developer Network" href = "ldn.php"> LDN </a>
        </nav>
        
		<main>
			<?php
$server = $_SERVER['PHP_SELF'];
$od_mail = "";

if(isset($_POST['odeslat']))
{
		//chybi jen co je to quest type
		
		$komu    = "lerainsoft@gmail.com";
		$predmet = "Od: " . $_POST['name'] . " Mail: " . $_POST['email'];
		$zprava = $_POST['job'] . "<br />" . $_POST['additNotes'];
		
		mail($komu, $predmet, $zprava);
		
		echo "<script> alert('E-mail was sent successfully.') </script>";
		//$od_mail = "<script> alert('$komu - $predmet - $zprava') </script>";

}
	?>
			
			<!--<h1> Contact </h1>-->
			<aside class = "lerainBox">
				<p class = "lerainText">So have you decided to become member of our small team? Please answer then few general questions: </p>
			</aside>
			<form id = "contactForm" action = "<?php echo $server; ?>" method = "POST">
				<table>
					<tr> <th class = "label"> Name/Nickname </th> <td> <input type = "text" name = "name" maxlength = "50" placeholder = "Your name" required />  </td> </tr>
                    <tr> <th class = "label"> E-mail Address </th> <td> <input type = "email" name = "email" maxlength = "50" placeholder = "We need contact you " required />  </td> </tr>
					<tr> <th class = "label"> Your position </th> <td class = "space"> <textarea name = "job" rows = "4" cols = "65" maxlength = "400" placeholder = "What do you like to do in LS? Adverts, videos, webpages, graphics, programmes? Please specify it here" required></textarea> </td> </tr>
					<tr> <th class = "label"> Additional notes </th> <td class = "space"> <textarea name = "additNotes" rows = "3" cols = "65" maxlength = "400" placeholder = "Have you got any additional notes?" ></textarea> </td> </tr>
					<tr> <th></th> <td> <input id = "formSubmit" type = "submit" name = "odeslat"/> </td> </tr>
				</table>
			</form>
			
		</main>	
		
        <? include "footer.html"; ?>   
	</body>
</html>
