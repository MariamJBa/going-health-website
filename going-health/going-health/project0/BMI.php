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
    <style>
        section{
            background-image: url(img/dite-plan.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        form{
            max-width: 400px;
            width: 100%;
            padding: 20px 30px;
            border-radius: 5px;
            -webkit-box-shadow:-1px 4px 26px 11px rgba(0,0,0,0.75) ;
            -moz-box-shadow:-1px 4px 26px 11px rgba(0,0,0,0.75) ;
             box-shadow:-1px 4px 26px 11px rgba(0,0,0,0.75) ;
        }
        form input {
            width: 220px;
            height: 30px;
        }
        .fixed1{
            width: auto;
        }
        @media (max-width: 360px){
            .fixed{
            margin-left:1px ;
        }
        }
        @media (min-width: 992px) {
            .fixed{
            margin-left:20px ;
        }
        }
        svg.svg-inline--fa.fa-angle-double-right.fa-w-14.fa-4x {
            float:right;
            margin-right: 50px;
        }
        
    
    </style>
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


<!-- bmi - sourcecode -->




<section>
<center>
<head><h1><font face = "forte">BMI Calculator</font></h1></head>
<form class="color-section" method="POST" action="#"> <br><br>
Mass in kilogram (kg):-
<input type="text" name="mass" require>
<br><br>
Height in meter (m):-
<input type="text" name="height" require>
<br><br>
<input class="fixed1" type="submit" name="submit" value="Calculate" require> <br>
<label><?php echo"<p> Your BMI value is   $bmi   and you are : $output</p>"; ?></label>
</form>
</center>
<a href="BMR.php">  <input class="fas fa-angle-double-left fa-4x" type="Submit" name="next"></a>
<a href="userpage.php"> <input class=" fas fa-angle-double-right fa-4x  " type="Submit" name="next"  ></a>
</section>





    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
 </html>


   
