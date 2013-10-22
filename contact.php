<!DOCTYPE html>
<?php
$server = $_SERVER['PHP_SELF'];
$od_mail = "";

if(isset($_POST['odeslat']))
{

	//chybi jen co je to quest type
	
	$komu    = "lerainsoft@gmail.com";
	$predmet = "Od: " . $_POST['name'] . " Mail: " . $_POST['email'];
	$zprava = $_POST['questType'] . "<br />" . $_POST['text'];
	
	mail($komu, $predmet, $zprava);
	
	$od_mail = "<script> alert('E-mail was sent successfully.') </script>";
	//$od_mail = "<script> alert('$komu - $predmet - $zprava') </script>";
	
}
	
	
?>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "description" content = "Domovská stránka a vývojová základna LerajnSoft-u | Kontaktná stránka">
        <meta name="author" content="Benji" >
        <link rel = "stylesheet" title = "Page's CSS" href = "styles.css">
        <title> Lerain Software Base | Contact</title>
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
			<!--<h1> Contact </h1>-->
			<aside class = "lerainBox">
				<p class = "lerainText">Do you want to send some feedback, ask a question? Do not hesitate to contact us ! <br> Or do you want to join our team? Then you should go <a title = "LerainSoft Application Form" href = "joinus.php"> here </a>.</p>
			</aside>
			<form id = "contactForm" action = "<?php echo $server; ?>" method = "POST">
				<table>
					<tr> <th class = "label"> Name </th> <td> <input type = "text" name = "name" maxlength = "50" required />  </td> </tr>
                    <tr> <th class = "label"> E-mail </th> <td> <input type = "email" name = "email" maxlength = "50" required />  </td> </tr>
					<tr> <th class = "label"> Your Message </th> <td class = "space"> <textarea name = "text" rows = "8" cols = "65" maxlength = "700" required></textarea> </td> </tr>
					<tr> <th class = "label"> Type your query </th> <td> <input id = "feedback" type = "radio" name = "questType" checked /> <label for = "feedback"> I want send my view about LS </label> </td> </tr>
					<tr> <th class = "label"> </th> <td class = "space"> <input id = "question" type = "radio" name = "questType" /> <label for = "question"> I want to ask something about our projects </label> </td> </tr>
					<tr> <th></th> <td> <input id = "formSubmit" type = "submit" name = "odeslat"/> </td> </tr>
				</table>
			</form>
			
		</main>	
		
        <? include "footer.html"; ?>   
	</body>
</html>
<?php

if(!empty($od_mail))
{
	echo $od_mail;
}

?>