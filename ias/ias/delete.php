<?php
include 'dbconnect.php';
$del=$_GET["kir"];
$delete=mysqli_query($con,"DELETE FROM `book`  WHERE `bid`='$del'");
header("location:view.php");
?>