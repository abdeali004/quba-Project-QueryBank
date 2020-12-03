<?php

session_start();

$con= mysqli_connect('localhost','root','');

 mysqli_select_db($con,'userinfo');

 
 $username=$_POST['username'];
 $password=$_POST['password'];

 $s="select * from userdata where usern='$username' && pass='$password'";
 $result=mysqli_query($con,$s);
 $num=mysqli_num_rows($result);

 if ($num) {
 	# code...
 	
 	$row=mysqli_fetch_row($result);
 	$_SESSION['username']=$row[0];
 	$_SESSION['userid']=$row[1];
 	header('location: home1.php');
 }
 else
 {
 	header('location: entry.php?status=l');
 }
 ?>