<?php
include_once 'connect.php';

$id = $_GET['id'];

$sql =" DELETE FROM tbl_uploads WHERE id='$id' ";
$result = mysqli_query($connect,$sql);

if(mysqli_query($connect,$sql)){
	echo'<script>window.alert("Delete Successfully"); window.location =("index.php");</script>';
	
	}
else{
	echo'<script>window.alert("Error!");window.location =("index.php");</script>';
	echo "Error" . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($connect);
?>