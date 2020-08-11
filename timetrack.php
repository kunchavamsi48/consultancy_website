<?php
session_start();
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Time Track</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="ttbody">
		<div class="tthead">
		<h1>Time Track of : <span ><?php echo $_SESSION['username']?></span></h1>
		</div>
	</div>
</body>
</html>