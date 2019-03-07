<?php

include_once "../../configure.php";
session_start();

$elevatorid = $_REQUEST['your_id'];
$lotid = $_REQUEST['lotid'];
$quantity = $_REQUEST['quantity'];
$damage = $_REQUEST['damage'];
$link = $_REQUEST['link'];
$shipment = $_REQUEST['shipment'];
$processor = $_REQUEST['processor'];
// echo "$farmerid";
$sql = "INSERT INTO elevator ( ELEVATOR_ID , LOT_ID , QUANTITY ,QUANTITY_DAMAGED, LINK_MOISTURE, SHIPMENT_DATE, PROCESSOR_ID)
   VALUES ('$elevatorid','$lotid', '$quantity','$damage','$link','$shipment','$processor')";

// echo "$lottype";
mysqli_query($db,$sql); 

?>