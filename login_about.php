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
                    <li id="current"><a href="login_about.php" >About us</a></li>
                    <li><a href="login_services.php">Services</a></li>
                    <li><a href="login_clients.php">Clients</a></li>
                    <li><a href="login_career.php">Careers</a></li>
                    <li><a href="login_contact.php">Contact us</a></li>
                    
                </ul>
            </nav>    
    </header>
    <!--<h1 id = "heading">ABOUT</h1> -->

<div class="acontainer">
  <div class="aimg">
    <img src="images/about.jpg">
  </div>
  <div class="abody">
    <h3>Name of consultancy</h3>
    <hr>
    <p>
      It is an organisation with the primary focus on complete customer satisfasction
and to provide our clients with the best possible services so as to boost their profits and help them
adapt to the ever-changing and volatile market.

What makes us stand out from our competition is that we cater exclusively to your needs and requirements 
with the help of industry experts and professionals who will make sure that you reach your business goals.

We aree a company with a comprehensive portfolio of services with quality processes, rich experience in managing clients and great transformational capabilities 
across various business verticals which ultimately enable us to align IT strategies to your needs.
    </p>
  </div>
</div>
</body>
</html>
