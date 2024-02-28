<?php

$server = "localhost";
$user = "landClass_admin";
$password = "OX5Y54JrA~$(";
$db = "classland_db";

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}
else{
    echo "Open console and check hi"; 
  
}
?>