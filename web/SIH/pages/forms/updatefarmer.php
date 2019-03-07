<?php
include_once "../../configure.php";
session_start();

$name=$_SESSION['name2'];
$pass=$_SESSION['pass2'];
$area=$_POST['area'];
$location=$_POST['location'];
$fertilizers=$_POST['fertilizers'];
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
 $farmer_id=$row['user_id'];

$qy1 = "INSERT INTO farmers ( farmer_id,area,location,fertilizers,fname,lname,gender,dob,address,state,postcode,phone)
VALUES ('$farmer_id','$area','$location','$fertilizers','$fname','$lname','$gender','$dob','$address','$state','$postcode','$phone')";
mysqli_query($con,$qy1);
header('location:../samples/login.php');
?>