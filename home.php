<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="details.css">
</head>
<body>
	<div class="homebody">
	<a href="logout.php">logout</a>
    <h2>welcome <?php echo $_SESSION['username'] ?> </h2>
    
    </div>
</body>
</html>