<?php
include ("server.php");
echo "test";
//exit;
//if (isset($_POST["plan-form"]) && $_POST["plan-form"] == 1){
//
//    $ins = "INSERT INTO plan (range_from , range_to , nameAr , nameEn  , description) VALUES (
//        '$_POST[rangeFrom]' , '$_POST[rangeTo]'  , '$_POST[nameAr]'  , '$_POST[nameEn]'    , '$_POST[description]')";
//    $res = mysqli_query($conn , $ins);
//    echo 'your pane is added successfully!!';
//    $_POST = null;
//}
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
<div class="container-fluid log-in-after form-conatiner">
    <div class="row ">
        <div class="col-xs-12 col-sm-4 col-md-8 col-lg-4" class="">
            <table border="2" id="admin">
                <tr>
                    <th>Id </th>
                    <th>range</th>
                    <th>nameAr</th>
                    <th>nameEn</th>
                    <th>description</th>

                </tr>
                <!-- Call data from the database on the table -->
                <?php
                //get data from plan table
                $conn = new mysqli("localhost", "root", "", "going-health");
                $select="SELECT * FROM plan";
                $q = mysqli_query($conn , $select);
                print_r($q);
                $row_all = mysqli_result($q);
                echo "<pre/>";
                print_r($row_all);
                exit;
                foreach ($row_all as $row){

                    echo"<tr>";
                    echo"<td>".$row["id"]."</td>";
                    echo"<td>".$row["range_from"]."-".$row["range_to"]."</td>";
                    echo"<td>".$row["nameAr"]."</td>";
                    echo"<td>".$row["nameEn"]."</td>";
                    echo"<td>".$row["description"]."</td>";
                    echo"</tr>";

                }

                ?>
            </table>
        </div>
    </div>

</div>






<?php
include ("dashboard_footer.php");
?>




