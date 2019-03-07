<?php
include_once "../../configure.php";


$name = $_POST['username'];
$pass = $_POST['password'];
$cat=$_POST['selection'];
$_SESSION['name2']=$name;
$_SESSION['pass2']=$pass;
// $dob = $_POST['dob'];
// $gender = $_POST['gender'];
// $state = $_POST['state'];
// $phone = $_POST['phone'];

$q = " SELECT * FROM user_profile WHERE USERNAME = '$name' && PASSWORD = '$pass' && CATEGORY = '$cat' ";
// $y = " SELECT user_profile.CATEGORY FROM user_profile WHERE USERNAME = '$name' && PASSWORD = '$pass' ";


$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);


 
 if($num == 1 && $cat == 'Farmer'){
    header('location:../forms/farmerprofile.php');
    
 }
 else if($num == 1 && $cat == 'Elevator'){
    header('location:../forms/elevatorprofile.php');
    
 }
 else if($num == 1 && $cat == 'Processor'){
    header('location:../processor/processorprofile.php');
    
 }

else{
    header('location:login.php');
}


?>