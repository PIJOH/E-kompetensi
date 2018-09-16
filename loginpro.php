<?php
session_start();
 
include 'connect.php';

$username = $connect -> real_escape_string ($_POST['username']);
$password = $connect -> real_escape_string ($_POST['password']);

$query = "SELECT * FROM user WHERE username='$username' and password='$password' ";

$result = $connect -> query($query);
$hitung = $result -> num_rows;

if($hitung){
	
	$cetak = $result -> fetch_assoc();
	extract($cetak);
	
	$_SESSION['userid'] = $userid;
	if($userid == '1'){
		echo'<script>window.alert("Berjaya Log Masuk!"); window.location=("homeAdmin.php");</script>';
	}
	else{
	echo '<script>window.alert("Berjaya Log Masuk"); window.location=("home.php");</script>';
	}

	
	}
	else{
		
		
		echo '<script>window.alert("your username and password are wrong"); window.location=("index.php");</script>';
		
		
		
	}

	

?>