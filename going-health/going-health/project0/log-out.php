<?php
include ("server.php");
//unset($_SESSION);
//
endPlaneTime($_SESSION["user_urid"]);
$_SESSION = [];
header("location:home.php");
?>