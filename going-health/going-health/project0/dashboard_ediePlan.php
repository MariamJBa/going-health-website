<?php
//echo "test "; exit;
//include ("dashboard_header.php");
include ("server.php");
if (isset($_POST["plan-form"]) && $_POST["plan-form"] == 1){

    $ins = "INSERT INTO plan (range_from , range_to , nameAr , nameEn  , description) VALUES (
        '$_POST[rangeFrom]' , '$_POST[rangeTo]'  , '$_POST[nameAr]'  , '$_POST[nameEn]'    , '$_POST[description]')";
    $res = mysqli_query($conn , $ins);
    echo 'your pane is added successfully!!';
    $_POST = null;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GOING-HEALTH</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="fixed.css" rel="stylesheet">



    <style type="text/css">
        #element1 {display:inline-block;margin-right:10px;}
        #element2 {display:inline-block;}
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
        <a class="a-logo d-none d-xl-block" href="home.php">Going-Health/Admin Dashboard</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="dashboard_plans.php">plans page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard_ediePlan.php">add plans page<</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Dashboard.php">Dashboard</a>
                </li>

            </ul>
        </div>
    </div>
</nav>




<!-- form -->
<div class="container-fluid log-in-after">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-8 col-lg-4">
            <form class="form-conatiner" action="dashboard_ediePlan.php" method="POST">
                <input title="" type="hidden" name="plan-form" value="1" />
                <H3 class="text-center">insert plan details</H3><br>
                <div class="form-group">
                    <div class="form-group">
                        <input type="text" class="form-control" id=""
                               name="nameAr"  placeholder="اسم الخطة" required>
                    </div> <br>
                    <div class="form-group">
                        <input type="text" class="form-control" id=""
                               name="nameEn"  placeholder="plan name in english" required>
                    </div> <br>
                    <div class="form-group">
                        <input  type="decimal" class="form-control" id=""
                               name="rangeFrom"  placeholder="range from" required>
                    </div> <br>
                    <div class="form-group">
                        <input  type="decimal" class="form-control" id=""
                               name="rangeTo"  placeholder="range to" required>
                    </div> <br>
                    <div class="form-group">
                        <textarea name="description" class="form-control" class="form-control" rows="8" cols="30">Enter text here...</textarea>
                    </div> <br>
                       <input type="submit" value="add-plan" name="add-plan"><br><br>
                    </div> <br>

            </form>
        </div>
    </div>
<!--    <table border="2" id="admin">-->
<!--        <tr>-->
<!--            <th>Id </th>-->
<!--            <th>range</th>-->
<!--            <th>nameAr</th>-->
<!--            <th>nameEn</th>-->
<!--            <th>description</th>-->
<!---->
<!--        </tr>-->
<!--        <!-- Call data from the database on the table -->-->
<!--        --><?php
//        //get data from plan table
//
//        $select="SELECT * FROM plan";
//        $q = mysqli_query($connect , $select);
//        while (@$row = mysqli_fetch_array ($q)){
//            echo"<tr>";
//            echo"<td>".$row["id"]."</td>";
//            echo"<td>".$row["range_from"]."-".$row["range_to"]."</td>";
//            echo"<td>".$row["nameAr"]."</td>";
//            echo"<td>".$row["nameEn"]."</td>";
//            echo"<td>".$row["description"]."</td>";
//            echo"</tr>";
//
//        }
//
//        ?>
<!--    </table>-->
<!--</div>-->







<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>





