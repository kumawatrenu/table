<?php
include("connection.php");

$Id = $_GET['id'];

$query = "DELETE FROM Record WHERE Id = '$Id'";
$data = mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('Record Deleted')</script>";
        ?>

<meta http-equiv = "refresh" content = "0; 
url = http://localhost/hello/display.php" />

   <?php
}
else
{
     echo "<script>alert('Failed to Delete')</script>";
}

?>