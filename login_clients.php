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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        
            <div class="container">
                <div class = "logo">
                    <img src="images/logo.png" >
                    <p><strong>X</strong>yz Consultancy</p>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><i class="fa fa-user"></i>  <?php echo $_SESSION['username'] ?></button>
                     <div class="dropdown-content">
                     <a href="timetrack.php">time tracker</a>
                    <a href="logout.php">logout  <i class="fa fa-sign-out"></i></a>
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
    <img src="images/stk9.jpg" id="img1" width="1525" height="400">
        <div class="centeredx1" id="bg1">
           Clients
    </div>
    <div  class="container0">
        <h1 class="head1" >We value our clients and take pride in working with them</h1>
        <br>
        <h4 class="head4" >Our clients 
</h4>
<br>
    <p id="tx1">
New technologies and business models are driving companies to transform at lightning speed for a digital, customer-first world. Wipro’s Consulting practice helps business leaders respond to their customers’ needs by driving digital-first transformation: from operations to technologies to people.<br>

</body>
</html>
