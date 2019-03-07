<?php


$db = new mysqli('finalsih.c0mfy10pl7cr.ap-south-1.rds.amazonaws.com','root','pallavdata95','finalsih');

$processorid = $_SESSION['processorid'];
$farmerid=$_POST['farmer_id'];
$productid = uniqid();
$manufacturingdate = $_POST['manufacturing_date'];
$expiry = $_POST['expiry_date'];
$shipmentid = $_POST['shipment_id'];
$shipmentdate = $_POST['shipment_date'];
$ingredient = $_POST['ingredient'];

foreach($farmerid AS $key=>$value){

$sql="INSERT INTO processor (PROCESSOR_ID,LOT_ID,PRODUCT_ID,MANUFACTURING_DATE,EXPIRY_DATE,SHIPMENT_ID,SHIPMENT_DATE,INGREDIENT)
  VALUES ('$processorid','" . $db->real_escape_string($value) . "','$productid', '$manufacturingdate', '$expiry', '$shipmentid', '$shipmentdate', '" . $db->real_escape_string($ingredient[$key]) . "')";
  mysqli_query($con,$sql);
  $insert = $db->query($sql);

}
 header('location:processorprofile.php');

?>


<!-- 

// include_once "../../configure.php";
// session_start();
// if($con) echo"connected";
// $processorid = $_SESSION['processorid'];
// $farmerid=$_POST['farmer_id'];
// $productid = uniqid();
// $producttype = $_POST['product_type'];
// $manufacturingdate = $_POST['manufacturing_date'];
// $expiry = $_POST['expiry_date'];
// $shipmentid = $_POST['shipment_id'];
// $shipmentdate = $_POST['shipment_date'];
// $ingredients = $_POST['ingredients'];
// //echo "$processorid $productid $producttype $ingredients";


// $sql="INSERT INTO processor (PROCESSOR_ID,LOT_ID,PRODUCT_ID,MANUFACTURING_DATE,EXPIRY_DATE,SHIPMENT_ID,SHIPMENT_DATE,INGREDIENT)
//   VALUES ('$processorid', '$productid', '$producttype', '$manufacturingdate', '$expiry', '$shipmentid', '$shipmentdate', '$ingredients')";
//   mysqli_query($con,$sql);
// header('location:processorprofile.php');

-->

