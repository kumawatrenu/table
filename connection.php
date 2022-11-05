<?php

$servername ="localhost";
$username = "root";
$password="";
$dbname="service";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //  echo "Connection Ok";
}
    else "Connection Failed"
?>