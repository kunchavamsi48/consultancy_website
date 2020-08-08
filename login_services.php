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
                    <li  id="current"><a href="login_services.php">Services</a></li>
                    <li><a href="login_clients.php">Clients</a></li>
                    <li><a href="login_career.php">Careers</a></li>
                    <li><a href="login_contact.php">Contact us</a></li>
                    
                </ul>
            </nav>    
    </header>
    <div class="bgr2">
        <img id="imgf" src="images/serv.gif" >
<h2 id="head">We provide a multitude of services which can be summarised as follows:</h2>
<br>
    <li>Providing information to a client.</li>
    <br>
    <br>
    <li>Solving a client’s problems.</li>
    <br>
    <br>
    <li>Making a diagnosis, which may necessitate redefinition of the problem.</li>
    <br>
    <br>
    <li>Making recommendations based on the diagnosis.</li>
    <br>
    <br>
    <li>Assisting with implementation of recommended solutions.</li>
    <br>
    <br>
    <li>Building a consensus and commitment around corrective action.</li>
    <br>
    <br>
    <li>Facilitating client learning—that is, teaching clients how to resolve similar problems in the future.</li>
    <br>
    <br>
    <li>Permanently improving organizational effectiveness.</li>
    <br>
    <br>
</div>
</body>
</html>
