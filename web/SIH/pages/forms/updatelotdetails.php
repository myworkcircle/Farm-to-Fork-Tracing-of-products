<?php

include_once "../../configure.php";
session_start();

$farmerid = $_REQUEST['your_id'];
$lotid = $_REQUEST['lotid'];
$lotvariety = $_REQUEST['lotvariety'];
$lottype = $_REQUEST['lottype'];
$harvesttime = $_REQUEST['harvesttime'];
$lotamount = $_REQUEST['lotamount'];
$elevatorid = $_REQUEST['elevatorid'];

$sql = "UPDATE farmer SET  FARM_ID='$farmerid' , LOT_ID='$lotid' , LOT_TYPE='$lottype' ,LOT_VARIETY='$lotvariety',
 LOT_AMOUNT='$lotamount', HARVEST_TIME='$harvesttime', ELEVATOR_ID='$elevatorid' WHERE LOT_ID='$lotid' ";

mysqli_query($db,$sql); 

?>

<script> alert("submitted"); 
window.location.href="farmerprofile.html"
</script>