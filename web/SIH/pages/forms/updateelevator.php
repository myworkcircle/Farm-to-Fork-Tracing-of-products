<?php
include_once "../../configure.php";
session_start();

$name=$_SESSION['name2'];
$pass=$_SESSION['pass2'];
$company=$_POST['company'];
$mot=$_POST['mot'];
// $fertilizers=$_POST['fertilizers'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$address=$_POST['address'];
$state = $_POST['state'];
$postcode=$_POST['postcode'];
$phone = $_POST['phone'];


$query="select user_id  from user_profile where USERNAME = '$name' && PASSWORD = '$pass'";
$result=mysqli_query($con,$query);

$row = $result->fetch_assoc();
 $elevator_id=$row['user_id'];
  //echo "$elevator_id $company $mot $fname $lname $gender $dob $address $state $postcode $phone";


$sql="insert into elevators(elevator_id,company,mot,fname,lname,gender,dob,address,state,postcode,phone)
values('$elevator_id', '$company', '$mot', '$fname', '$lname', '$gender', '$dob', '$address', '$state', '$postcode', '$phone')";
mysqli_query($con,$sql);


header('location:../samples/login.php');
?>