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
                    <li><a href="login_clients.php">Clients</a></li>
                    <li id="current"><a href="login_career.php">Careers</a></li>
                    <li><a href="login_contact.php">Contact us</a></li>
                    
                </ul>
            </nav>    
    </header>
    <div class="bgr3">
<h1 text-align="center">Career oppurtunities at xyz</h1> 
<article>
    There are various job oppurtunities available in our company for various positions in different 
    departments. By joining our company, you can be a part of something bigger than just this company and make your mark in the industry. Stay in touch with us for further information regarding any new openings in the company.
</article>
<article>For further information, feel free to contact us through social media or through our company Email.
<br>
<br>
</article>
</div>
</body>
</html>
