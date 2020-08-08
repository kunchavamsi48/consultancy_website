<?php
 session_start();
?>
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
                <li><a href="home.php">Home</a></li>
                    <li><a href="login_about.php" >About us</a></li>
                    <li><a href="login_services.php">Services</a></li>
                    <li id="current"><a href="login_clients.php">Clients</a></li>
                    <li><a href="login_career.php">Careers</a></li>
                    <li><a href="login_contact.php">Contact us</a></li>
                    
                </ul>
            </nav>    
    </header>
    <div class="bgr4">
<h1 text-align="center">Our clients</h1> 
<article>
    We take great pride in having a great track record with all our past clients. Some of them are:
<br>
     Client 1
     <br>
     Client 2
     <br>
     Client 3
     <br>
     Client 4 
<br>
<br>
</article>
</div>
</body>
</html>
