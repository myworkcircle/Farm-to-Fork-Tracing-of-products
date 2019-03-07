<?php
include_once "../../configure.php";
session_start();


$name=$_SESSION['name2'];
$pass=$_SESSION['pass2'];
$company=$_POST['company'];
$location=$_POST['location'];
$area=$_POST['area'];
$reg_num=$_POST['reg_num'];
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
 $processor_id=$row['user_id'];
  //echo "$elevator_id $company $mot $fname $lname $gender $dob $address $state $postcode $phone";


$sql2=" insert into processors(processor_id,company,location,area,reg_num,fname,lname,gender,dob,address,state,postcode,phone)
values('$processor_id', '$company', '$location', '$area', '$reg_num', '$fname', '$lname', '$gender', '$dob', '$address', '$state', '$postcode', '$phone')";
mysqli_query($con,$sql2);


header('location:../samples/login.php');
?>