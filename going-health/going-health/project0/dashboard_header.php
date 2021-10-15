<?php
include ("server.php");
?>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="a-logo d-none d-xl-block" href="home.php">Going-Health</a>
        <?php
        if(isset($_SESSION['user_urid']))
            echo '<a class="nav-link" >welcome' . $_SESSION["user_name"] .'</a>';
        ?>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <?php

                if(isset($_SESSION['user_urid']))
                    echo '<li class="nav-item">
                    <a class="nav-link" href="userPlanDetails.php">Plan</a>
                </li>';

                if(!isset($_SESSION['user_urid']))
                    echo ' <li class="nav-item">
                    <a class="nav-link" href="sing-up.html">Sing-Up</a>
                </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Log-In</a>
                    <div class="dropdown-menu logg">
                      <a class="dropdown-item" href="log-in.php">User-Account</a>
                      <a class="dropdown-item" href="log-in-after.php">Admin-Account</a>
                    </div>
                  </li>';


                if(isset($_SESSION['user_urid']))
                    echo '<li class="nav-item">
                    <a class="nav-link" href="log-out.php">Log-out</a>
                </li>';




                ?>


            </ul>
        </div>
    </div>
</nav>
