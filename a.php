<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8" />
	</head>
	<body>
		<form action = "s.php" method = "post">
			<input type = "text" name = "test" />
			<input type = "submit" />
		</form>
		žum

<?php
 echo $_POST["test"];
	 ?>
	</body>
</html>