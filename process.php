<?php

	include_once 'loginraiz.php';
	
	$username=$_POST['username'];
	$password=$_POST['password'];

	#$username = stripcslashes($username);
	#$password = stripcslashes($password);
	#$username = mysql_real_escape_string($username);
	#$password = mysql_real_escape_string($password);
	
	$sql = "SELECT * from users"; #where username = '$username' and password = '$password'
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	
	
	if ($row['username'] == $username && $row['password'] == $password){
	header("Location: inicio.html");}
	else{
	header("Location: falhanologin.php");;
	}
		
?>