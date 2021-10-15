
<?php
#          mysqli_connect ("127.0.0.1","my_user","my_password","db_name");
$connect = mysqli_connect ("localhost" , "root" , "" , "going-health");

$select="SELECT * FROM userinfo";
$q = mysqli_query($connect , $select);
//print_r($q);
//exit;
// if($q){

//     echo "salam";

// }
// else{
//     echo"sa";
// }

// admain can add items/users : 

if (isset($_POST["add-users"])){
    $t1 = $_POST["na1"];
    $t2 = $_POST["na2"];
    $t3 = $_POST["na3"];
    $t4 = $_POST["na4"];
    $t5 = $_POST["na5"];
    $t6 = $_POST["na6"];

    $ins = "INSERT INTO userinfo (id , mysqli_fetch_arrayfirstname , lastname , username , email , password) VALUES (
        '$t1' , '$t2'  , '$t3'  , '$t4'  , '$t5'  , '$t6')";
    $res = mysqli_query($connect , $ins);

}

// admain can delet items/users : 
$d1='';
$d2='';
$d3='';
$d4='';
$d5='';
$d6='';
if (isset($_POST["na1"])){
    $d1=$_POST["na1"];
}
if (isset($_POST["na2"])){
    $d2=$_POST["na2"];
}
if (isset($_POST["na3"])){
    $d3=$_POST["na3"];
}
if (isset($_POST["na4"])){
    $d4=$_POST["na4"];
}
if (isset($_POST["na5"])){
    $d5=$_POST["na5"];
}
if (isset($_POST["na6"])){
    $d6=$_POST["na6"];
}
$delete="";
if (isset($_POST["delete-users"])){
    $delete="DELETE FROM userinfo WHERE id='$d1' ";
    $res_dele= mysqli_query($connect,$delete);
}
// admain can modify items/users : 
$m1="";
$m2="";
$m3="";
$m4="";
$m5="";
$m6="";
if (isset($_POST["na1"])){
    $m1=$_POST["na1"];
}
if (isset($_POST["na2"])){
    $m2=$_POST["na2"];
}
if (isset($_POST["na3"])){
    $m3=$_POST["na3"];
}
if (isset($_POST["na4"])){
    $m4=$_POST["na4"];
}
if (isset($_POST["na5"])){
    $m5=$_POST["na5"];
}
if (isset($_POST["na6"])){
    $m6=$_POST["na6"];
}

$modify = "";
if (isset($_POST["modify-users"])){
    $modify="UPDATE userinfo SET firstname = '$m2' , lastname = '$m3' , username ='$m4' , email='$m5' , password = '$m6'   ";
   $tset =mysqli_query($connect,$modify);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Welcome to dashboard and control panal</h1>
<a class="a-logo d-none d-xl-block" href="dashboard_plans.php">plans page</a><br/>
<a class="a-logo d-none d-xl-block" href="dashboard_ediePlan.php">add plans page</a><br/>
<a class="a-logo d-none d-xl-block" href="Dashboard.php">Dashboard</a><br/>



<form action=""  method="POST">
    <input type="submit" value="add-users" name="add-users"><br><br>
    <input type="submit" value="delete-users" name="delete-users"><br><br>
    <input type="submit" value="modify-users" name="modify-users"><br><br>
    <input type="submit" value="search" name="search"><br><br> <br>
    <label for="">id</label><br>
<input type="number" id="id1" name="na1"><br>
<label for="">firstname:</label><br>
<input type="text" id="id2" name="na2"><br>
<label for="">lastname :</label><br>
<input type="text" id="id3" name="na3"><br>
<label for="">username :</label><br>
<input type="text" id="id4" name="na4"><br>
<label for="">email :</label><br>
<input type="email" id="id5" name="na5"><br>
<label for="">password :</label><br>
<input type="password" id="id6" name="na6"><br><br>
<!-- table for view inf from database -->
<table border="2" id="admin">
<tr>
<th>Id </th>
<th>firstname</th>
<th>lastname</th>
<th>Username</th>
<th>Email</th>
<th>Password</th>

</tr>
<!-- Call data from the database on the table -->
<?php
while (@$row = mysqli_fetch_array ($q)){
    echo"<tr>";
echo"<td>".$row["id"]."</td>";
echo"<td>".$row["firstname"]."</td>";
echo"<td>".$row["lastname"]."</td>";
echo"<td>".$row["username"]."</td>";
echo"<td>".$row["email"]."</td>";
echo"<td>".$row["password"]."</td>";
    echo"</tr>";

}

?>
</table>

</form>

<script>
var test = documentg.getElementById("admin")
for(var x=1 ; x<test.rows.length ;x++){
    test.rows[x].onclick = function(){
   document.getElementById("id1").value = this.cells[0].inerHTML;
   document.getElementById("id2").value = this.cells[1].inerHTML;
   document.getElementById("id3").value = this.cells[2].inerHTML;
   document.getElementById("id4").value = this.cells[3].inerHTML;
   document.getElementById("id5").value = this.cells[4].inerHTML;
   document.getElementById("id6").value = this.cells[5].inerHTML;

    }
}

</script>


<script src="js/admin/plugins/jquery/jquery.min.js"></script>
</body>

</html>

