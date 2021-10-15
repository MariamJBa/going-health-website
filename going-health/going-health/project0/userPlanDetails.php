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
<?php
include ("header.php");
include ("errors.php");
endPlaneTime($_SESSION["user_urid"]);
$getPlanDetail = getPlanDetail($_SESSION["user_urid"]);

?>
    <!-- Navigation -->
<!--    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">-->
<!--        <div class="container-fluid">-->
<!--            <a class="navbar-brand" href="#"><img src="img/logo.png"></a>-->
<!--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">-->
<!--                <span class="navbar-toggler-icon"></span>-->
<!--            </button>-->
<!--            <a class="a-logo d-none d-xl-block" href="home.php">Going-Health</a>-->
<!--            <div class="collapse navbar-collapse" id="navbarResponsive">-->
<!--                <ul class="navbar-nav ml-auto">-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="home.php">Home 1111</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="about.html">About</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="sing-up.html">Sing-Up</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item dropdown">-->
<!--                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Log-In</a>-->
<!--                        <div class="dropdown-menu logg">-->
<!--                          <a class="dropdown-item" href="log-in.php">User-Account</a>-->
<!--                          <a class="dropdown-item" href="log-in-after.php">Admin-Account</a>-->
<!--                        </div>-->
<!--                      </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="FAQ.html">FAQ</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </nav>-->

    <div class="bg1">
        <div class="container" id="reg">
            <div class="title text-center"><?php echo $_SESSION['user_name']; ?> plan details</div>
            <form >
                <div class="user-details">
<!--                    Weight: --><?php //echo $_SESSION['user_bmi_data']['Weight']; ?><!-- kg-->
<!--                    Height: --><?php //echo $_SESSION['user_bmi_data']['Height']; ?><!-- m-->
<!--                    age:    --><?php //echo $_SESSION['user_bmi_data']['age']; ?><!-- years-->

                    <div class="input-box">
                        <span class="details">Bm user info</span>
                        <input value="Weight:<?php echo $_SESSION['user_bmi_data']['Weight'] .' kg, '.
                            'Height:'; echo $_SESSION['user_bmi_data']['Height'] .' m, '.
                            'age:'  ;echo $_SESSION['user_bmi_data']['age'].' years' ?> "
                        readonly >
                    </div>
                    <div class="input-box">
                        <span class="details">BMI-Name</span>
                        <input type="text" placeholder="<?php echo $getPlanDetail['nameAr'].' '.$getPlanDetail['nameEn'];?>" readonly>
                    </div>
                    <div class="input-box">
                        <span class="details">your BMI</span>
                        <input type="text" placeholder="<?php echo $getPlanDetail['bmi']?>" readonly>
                    </div>
                    <div class="input-box">
                        <span class="details"><?php echo $getPlanDetail['nameAr']. 'Range';?></span>
                        <input type="email" placeholder="<?php echo $getPlanDetail['range_from'].'-'.$getPlanDetail['range_to']?>" readonly>
                    </div>
                    <div class="input-box">
                        <span class="details">your BMR</span>
                        <input type="text" placeholder="<?php echo $getPlanDetail['bmr']?>" readonly>
                    </div>
                </div>
                <div  >
                    <span class="details">Your plan details</span>
                    <textarea readonly rows="8" cols="30" style="display: block;
    margin-top: 0em;
    margin-block-end: 1em;
    box-sizing: border-box;
height: 50%;
    width: 100%;
    outline: none;
    color: #000;
    border: none;
    font-size: 18px;
    font-weight: 500;">
                        <?php echo $getPlanDetail['description']?>
                    </textarea>
                </div>

            </form>
        </div>
    </div>







        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


</body>
</html>