<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testing</title>
	<script src="anim.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<p>Сейчас вам скажут привет.</p>
	<?php
		function say_hi ($who){
			echo "<h1>Hello, ".$who."!!!</h1>";
		}
		$test = "World";
		say_hi($test);
	?>
</body>

</html>