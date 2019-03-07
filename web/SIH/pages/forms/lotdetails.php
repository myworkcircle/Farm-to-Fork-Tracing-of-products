<?php
include_once "../../configure.php";
session_start();



$farmerid =$_SESSION['farmerid'];
$lotid =$_POST['lotid'];
$lotvariety =$_POST['lotvariety'];
$lottype =$_POST['lottype'];
$harvesttime =$_POST['harvesttime'];
$lotamount =$_POST['lotamount'];
$elevatorid =$_POST['elevatorid'];

$sql = "INSERT INTO farmer ( FARM_ID , LOT_ID , LOT_TYPE ,LOT_VARIETY, LOT_AMOUNT, HARVEST_TIME, ELEVATOR_ID)
   VALUES ('$farmerid','$lotid', '$lottype','$lotvariety','$lotamount','$harvesttime','$elevatorid')";

mysqli_query($con,$sql); 
header('location:farmerprofile.php');


?>