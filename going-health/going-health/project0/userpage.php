
<?php 
include ("server.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GOING-HEALTH</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="fixed.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-toggle="sticky-nav" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="a-logo d-none d-xl-block" href="home.php">Going-Health</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sing-up.html">Sing-Up</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Log-In</a>
                        <div class="dropdown-menu logg">
                          <a class="dropdown-item" href="log-in.php">User-Account</a>
                          <a class="dropdown-item" href="log-in-after.php">Admin-Account</a>
                        </div>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FAQ.php">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <form method="POST" action="useraccount.php" id="contact-form">
        <h2>Contact us</h2>
        <p><label>First Name:</label> <input name="name" type="text" /></p>
        <p><label>Email Address:</label> <input style="cursor: pointer;" name="email" type="text" /></p>
        <p><label>Message:</label>  <textarea name="message"></textarea> </p>
        <p><input type="submit" value="Send" /></p></form>

<?php


      if ($bmi  <= 18.5) {
        $bm= "Thinness is a problem that some women suffer from, just like being overweight, nothing may satisfy the body except complete moderation of weight. If you are a skinny woman, learn with us today healthy ways to gain weight properly.";
        else if ($bmi > 18.5 AND $bmi<=24.9 ) {
            $bm = "Normal Weight";
      } 
      else if ($bmi > 24.9 AND $bmi<=29.9) {
        $bm = "Over Weight";
      } 
      else if ($bmi > 30.0) {
        $bm = "OBESE";
        }
    
    }
?>










   </html>
?>


   
