<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that nasabah
$id = $_GET['id'];
 
// Delete nasabah row from table based on given id
$result = mysqli_query($conn, "DELETE FROM nasabah WHERE id_nasabah=$id");
 
// After delete redirect to Home, so that latest nasabah list will be displayed.
header("Location:index.php");
?>