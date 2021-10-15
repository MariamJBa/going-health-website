<?php
//   Connect to all Pages In my Projects:
session_start();

define("URL", 'http://localhost/going-health/going-health/project0/');

// Create connection
$conn = new mysqli("localhost", "root", "", "going-health");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Variable Decerlaration :
$x1 = "";
$x2 = "";
$x3 = "";
$x4 = "";
$x5 = "";
$x6 = "";


$weight = "";
$height = "";
$age = "";
$gender = "";
$exer = "";
$calories = "";
$mass = "";


$bmi = "";
$output = "";
$bmr = "";


$errors = array();
$_SESSION["success"] = "";


//  Collect Data Frome Form reg :
if (isset($_POST["btn1"])) {
    $x1 = $_POST["name1"];
    $x2 = $_POST["name2"];
    $x3 = $_POST["name3"];
    $x4 = $_POST["name4"];
    $x5 = $_POST["password1"];
    $x6 = $_POST["password2"];


    //  Validation :
    if ($x1 == 0) {
        array_push($errors, "firstname is required");
    }

    if ($x2 == 0) {
        array_push($errors, "lastname is required");
    }

    if ($x3 == 0) {
        array_push($errors);
    }

    if ($x4 == 0) {
        array_push($errors, "email is required");
    }

    if ($x5 == 0) {
        array_push($errors, "password is required");
    }


    if ($x5 != $x6) {
        array_push($errors, "Passwords Dont Match");
    }

    //  Insert Data To Tables :
    if (count($errors) == 0) {
        $insert = "INSERT INTO userinfo (firstname , lastname , username , email , password) VALUES ('$x1' , '$x2' , '$x3' , '$x4', '$x5')";
        $result = mysqli_query($conn, $insert);

        $_SESSION["name3"] = $x3;
        $_SESSION["success"] = "Register succefully";
    }

}


//    Login Page :
//echo " _POST <pre/>";
//print_r($_POST);
if (isset ($_POST["login"])) {
    $y1 = $_POST["email1"];
    $y2 = $_POST["pas"];
    if (empty($y1)) {
        array_push($errors, "email is required");
    }

//    echo " _POST <pre/>";
    $compare = "SELECT * FROM userinfo WHERE email = '$y1' and password = '$y2' ";
    $result2 = mysqli_query($conn, $compare);
    $row = mysqli_fetch_array($result2);
//    echo "userData  ";
//    print_r($row);
    $_SESSION['user_name'] = $row['firstname'] . " " . $row['lastname'];
    $_SESSION["user_urid"] = $row['id'];
    $loginUserId = $_SESSION["user_urid"];

    //get wight, height, age for login user from bmi table
    $_SESSION['user_bmi_data'] = getBmiInfoForUser($loginUserId);

    if (@mysqli_num_rows($result2) == 1) {
        $planCount = hasPlan($loginUserId);
        if ($planCount > 0) {
            endPlaneTime($loginUserId);
            header("location:home.php");
        } else {
            header("location:BMR.php");
        }
//    exit;


    } else {
        array_push($errors, "Email or password not correcr");
    }
}

//    Admin Page :
if (isset ($_POST["adminlogin"])) {
    $t1 = $_POST["admin"];
    $t2 = $_POST["admin10"];


    $compare2 = "SELECT * FROM admin WHERE email = '$t1' and password = '$t2'";
    $result3 = mysqli_query($conn, $compare2);


    if (@mysqli_num_rows($result3) == 1) {
        header("location:dashboard.php");

    } else {
        array_push($errors, "Email or password not correcr");

    }
}


// bmr - userpage:

if (isset($_POST["calculate"])) {

    $weight = $_POST["weight"];
    $mass = $weight;
    $height = $_POST["height"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $exer = $_POST["exer"];
    $calories = "0.0215183";


    if ($weight == 0) {
        array_push($errors, "email is required");
    }

    if ($height == 0) {
        array_push($errors, "password is required");
    }


    if ($age == 0) {
        array_push($errors, "Passwords Dont Match");
    }
    //  Insert Data To Tables :
    if (count($errors) == 0) {

        $insert5 = "INSERT INTO bminfo (Weight, Height , age ) VALUES
    ( '$weight', WHERE userinfo.id=bminfo.usid  ),
    ( '$height',  WHERE userinfo.id=bminfo.usid ),
    ( '$age',  WHERE userinfo.id=bminfo.usid)";
        // $insert5 = "INSERT INTO bminfo (Weight , Height , age) VALUES ('$weight' , '$height' , '$age')";
        $result5 = mysqli_query($conn, $insert5);

        $_SESSION["age"] = $age;
        $_SESSION["success"] = "Register succefully";
    }


}

 function bmi($mass, $height)
{

    $height = $height / 100;

    $bmi = $mass / ($height * $height);
    return $bmi;
}

function calcuate_bmi($mass, $height)
{
    $output ='';
//    echo "  mmmmmmmmmmm  ".$mass."  mmmmmmmmmmm  ". $height;
//    if(isset($mass) || isset($height))
     if ($mass == null || $height == null )
        return [];
//    echo "<br/> _________________ mmmmmmmmmmm  ".$mass."  mmmmmmmmmmm  ". $height;
    $bmi = bmi($mass, $height);
    if ($bmi <= 18.5) {
        $output = "Under Weight";
    } else if ($bmi > 18.5 and $bmi <= 24.9) {
        $output = "Normal Weight";
    } else if ($bmi > 24.9 and $bmi <= 29.9) {
        $output = "Over Weight";
    } else if ($bmi > 30.0) {
        $output = "OBESE";
    }
    $data['bmi'] = $bmi;
    $data['output'] = $output;
    return $data;
}

//Collect Data Frome Form bmi :

if (isset($_POST['submit'])) {
    $mass = $_POST['mass'];
    $height = $_POST['height'];
    function bmi_($mass, $height)
    {
        $height = $height / 100;
        $bmi = $mass / ($height * $height);
        return $bmi;
    }

    $bmi = bmi_($mass, $height);
    if ($bmi <= 18.5) {
        $output = "Under Weight";
    } else if ($bmi > 18.5 and $bmi <= 24.9) {
        $output = "Normal Weight";
    } else if ($bmi > 24.9 and $bmi <= 29.9) {
        $output = "Over Weight";
    } else if ($bmi > 30.0) {
        $output = "OBESE";
    }
    // echo "Your BMI value is " . $bmi . " and you are : "; 
    // echo "$output";
}

if ($mass == 0) {
    array_push($errors, "username is required");
}
//insert bata to userresult:


function insert_userresult($urid, $bmi, $bmr)
{
    $urid = (int)$urid;
    $bmi = (int)$bmi;
    if ($bmi > 0) {

//        print_r($_SESSION);
//        print_r($_POST);
//        exit;
        insertBmiInfo($_SESSION["user_urid"] , $_POST['weight'] , $_POST['height'] , $_POST['age']);

        $planId = getPlanId($bmi);
        $conn = new mysqli("localhost", "root", "", "going-health");

        $sql = "INSERT INTO userresult (urid, bmi , bmr,planId ) VALUES ('$urid' ,'$bmi',  '$bmr', '$planId')";
        if ($conn->query($sql) === TRUE) {
            header("location:home.php");

        } else {
            header("location:home.php");
        }

    }


    //getPlanDetail($urid);

}


function insertBmiInfo($userId , $weight , $height , $age){
    $conn = new mysqli("localhost", "root", "", "going-health");
    $sql = "INSERT INTO bminfo (urid, Weight , Height,age ) VALUES ('$userId' , '$weight' , '$height' , '$age')";
    if ($conn->query($sql) === TRUE) {

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
function hasPlan($userId)
{
    $conn = new mysqli("localhost", "root", "", "going-health");
    $select = "SELECT count(*) FROM userresult where " . $userId . " = urid";
    $q = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($q);
    return $row[0];
}

function endPlaneTime($userId){
    $planCount = hasPlan($userId);
    if ($planCount > 0) {
        $conn = new mysqli("localhost", "root", "", "going-health");
        $select = "SELECT id, created_at FROM userresult where " . $userId . " = urid";
        $q = mysqli_query($conn, $select);
        $row = mysqli_fetch_array($q);

        //7 days = 604800000 millseconds
        if(date('yyyy-mm-dd')-$row['created_at']>=604800000){
            echo "delete please";
            $del = "delete FROM userresult where " . $userId . " = urid";
            $q = mysqli_query($conn, $del);
            header("location:BMR.php");
        }
//        header("location:home.php");
    } else {
        header("location:BMR.php");
    }
}

function getPlanId($bmi)
{


    $conn = new mysqli("localhost", "root", "", "going-health");
    $select = "SELECT id FROM plan where " . $bmi . " Between range_from and range_to";
    $q = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($q);
    return $row['id'];
}


function getPlanDetail($uid)
{
    $conn = new mysqli("localhost", "root", "", "going-health");
    $select = "Select   plan.nameAr, plan.nameEn ,plan.description , plan.range_from , plan.range_to, userresult.bmi, userresult.bmr   from plan inner join userresult on userresult.urid = " . $uid . " And plan.id = userresult.planId";
    $q = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($q);


    return $row;
}

function getBmiInfoForUser($userId){

    $conn = new mysqli("localhost", "root", "", "going-health");
    $compare = "SELECT * FROM bminfo WHERE urid = '$userId' ";
    $result2 = mysqli_query($conn, $compare);
    $row = mysqli_fetch_array($result2);
    echo "hhh ";
    print_r($row);
    return $row;
}
?>