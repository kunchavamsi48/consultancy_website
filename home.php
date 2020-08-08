<?php
session_start();
?>

<!-- <!DOCTYPE html>
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
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@500&family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        
            <div class="container">
                <div class = "logo">
                    <img src="images/logo.png" >
                    <p><strong>X</strong>yz Consultancy</p>
                </div>
                <div class="user">
				<div class="homebody">
					<a href="logout.php">logout</a>
   					 <h2>welcome <?php echo $_SESSION['username'] ?> </h2>
				</div>
                </div>
            </div>
            <nav>
                <ul>
                    <li id="current"><a href="index.html">Home</a></li>
                    <li><a href="login_about.php" >About us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="clients.html">Clients</a></li>
                    <li><a href="career.html">Careers</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                    
                </ul>
            </nav>    
    </header>
    <div class="bgr">
<h1 text-align="center">Welcome!</h1>
<article>XYZ consultancy is an organisation with the primary focus on complete customer satisfasction
and to provide our clients with the best possible services so as to boost their profits and help them
adapt to the ever-changing and volatile market.
</article>
<article>We prioritize quality and service over everything else. Our motto is "Customer comes first" and this has been the integral part of who we are as an organisation.
<br>
<br>
</article>
</div>
    
</body>
</html>