<?php 
include 'config.php';

$id=$_GET['id'];
$query="delete from services where id='$id'";
$s=$conn->query($query);
if ($s) {
    
    header('location:services.php');
}
else {
    header('location:service.php');
}



$us = "delete from newusers where id='$id'";
mysqli_query($conn, $us);
header('location:users.php');
?>
