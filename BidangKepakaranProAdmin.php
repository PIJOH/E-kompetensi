<?php 
require ("connect.php"); 
require ("session.php");


if(isset($_POST['save'])) 
{

$BidangKepakaran_id = $_POST['BidangKepakaran_id'];
$PilihanPertama= $_POST['PilihanPertama'];
$PilihanKedua= $_POST['PilihanKedua'];
$PilihanKetiga = $_POST['PilihanKetiga'];
$userid = $_SESSION['userid'];	

$sql = "INSERT INTO bidangkepakaran (BidangKepakaran_id, PilihanPertama, PilihanKedua, PilihanKetiga, userid) VALUES ('$BidangKepakaran_id', '$PilihanPertama' , '$PilihanKedua', '$PilihanKetiga','$userid');";


if (mysqli_query($connect, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);

header ("Location:BidangKepakaranAdmin.php");
}
?>


