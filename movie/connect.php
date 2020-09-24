<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "movie1";

$con = mysqli_connect($host,$user,$password,$dbname);
mysqli_query($con,"set char set utf8");
?>