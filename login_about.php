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
                    <li id="current"><a href="login_about.php" >About us</a></li>
                    <li><a href="login_services.php">Services</a></li>
                    <li><a href="login_clients.php">Clients</a></li>
                    <li><a href="login_career.php">Careers</a></li>
                    <li><a href="login_contact.php">Contact us</a></li>
                    
                </ul>
            </nav>    
    </header>
    <!--<h1 id = "heading">ABOUT</h1> -->
    <img src="images/stk3.jpg" id="img1" width="1525" height="400">
        <div  class="centeredx" id="bg1">
            About us
    </div>
<div  class="container0">
        <h1 class="head1" >We at XYZ consultancy strive for perfection </h1>
        <br>
        <h4 class="head4">Our vision is to have every one of our customer's needs met perfectly
</h4>
<br>
    <p id="tx1">
Ours is an organisation with the primary focus on complete customer satisfasction
and to provide our clients with the best possible services so as to boost their profits and help them
adapt to the ever-changing and volatile market.
<br>
<br>
What makes us stand out from our competition is that we cater exclusively to your needs and requirements 
with the help of <em>industry experts and professionals</em> who will make sure that you reach your business goals.<br>
<br>
We are a company with a comprehensive portfolio of services with quality processes, rich experience in managing clients and great transformational capabilities 
across various business verticals which ultimately enable us to align IT strategies to your needs.
</p>
    <br>
    <br>
    <img src="images/stk4.jpg" id="img2" width="90%" height="300">
        <div class="centeredy" id="bg1">
            Our business model
    </div>
    <br>
    <br>
    <p id="tx1">
    We understand the complexities of recruiting staff for your companies and how choosing the right people for the right job can help come a long way in boosting company productivity and profits. <br>
    <br>
</p>
<div class="flex-container">
  <div style="background-color:#CF4B0D">Prioritise client success</div>
  <div style="background-color:#D2DE15 ">Focus on Quality over Quantity</div>
  </div>
  <div class="flex-container2">
  <div  style="background-color:#1869C1">Maintain a healthy work environment</div> 
  <div style="background-color:#40B90E">Establish meaningful relationships</div>  
</div>
</div>
</body>
</html>
