<?php

session_start();
header("location: entry.php");

$con= mysqli_connect('localhost','root','');

 mysqli_select_db($con,'userinfo');

 $fullname=$_POST['fullname'];
 $username=$_POST['username'];
 $email=$_POST['email'];
 $password=$_POST['password'];

 $s="select * from userdata where usern='$username'";
 $result=mysqli_query($con,$s);
 $num=mysqli_num_rows($result);

 if ($num) {
 	# code...
 	header('location: entry.php?status=r');
 }
 else
 {
 	$reg="insert into userdata(name,usern,mail,pass) values('$fullname','$username','$email','$password')";
 	mysqli_query($con,$reg);
 	$reg2="insert into profile(usern) values('$username')";
 	mysqli_query($con,$reg2);
 	header('location: entry.php');
 }
 ?>