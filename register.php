<?php
$uname="gpganai";
$host="localhost";
$pname="admin1234";
$db="registration";
$name = $_POST['name'];
$fathers= $_POST['fname'];
$dob = $_POST['date'];
$phone = $_POST['number'];
$email = $_POST['email'];
$branch = $_POST['branch']; 
$address = $_POST['address'];
$con=mysqli_connect($host,$uname,"$pname",$db);
mysqli_query($qry,$con)
$qry="INSERT INTO registration (your_name,father_name,dob,phone_no,email,branch,address) VALUES ($name,$fathers,$dob,$phone,$email,$branch,$address);
if(!$qry)
die('not inserted');
mysqli_close($con);
?>
