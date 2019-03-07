<?php
include_once "../../configure.php";
session_start();


$name = $_POST['username'];
$pass = $_POST['password'];
// $dob = $_POST['dob'];
// $gender = $_POST['gender'];
// $state = $_POST['state'];
// $phone = $_POST['phone'];
$cat=$_POST['selection'];
$_SESSION['name2']=$name;
$_SESSION['pass2']=$pass;


$query1 = " select * from user_profile where USERNAME = '$name' && PASSWORD = '$pass' ";

$result = mysqli_query($con, $query1);

$num = mysqli_num_rows($result);

if($num == 1){
   echo " duplicate id ";
}else{
     $query2 = "INSERT INTO user_profile ( CATEGORY,USERNAME , PASSWORD )
   VALUES ('$cat','$name', '$pass')";
   mysqli_query($con, $query2);
   
   $last_id = $con->insert_id;
   
echo "$last_id";

   $user_id="$cat-$last_id";
   $qy="update user_profile SET user_id='$user_id' where id='$last_id'";
   mysqli_query($con,$qy);
   if( $cat == 'Farmer'){
      header('location:../forms/farmersignup.php');
     
   }
   else if( $cat == 'Elevator'){
      header('location:../forms/elevatorsignup.php');
     
   }
   else if( $cat == 'Processor'){
      header('location:../forms/processorsignup.html');
     
   }
 

}



?>
