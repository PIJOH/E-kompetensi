<?php 
require ("connect.php"); 
require ("session.php");


if(isset($_POST['save'])) 
{

$Kursus_id = $_POST['Kursus_id'];
$NamaKursus = $_POST['NamaKursus'];
$Kategori = $_POST['Kategori'];
$Bidang= $_POST['Bidang'];
$Lokasi =$_POST['Lokasi'];
$Anjuran =$_POST['Anjuran'];
$datepicker =$_POST['datepicker'];
$datepicker2 =$_POST['datepicker2'];
$DeskripsiDokumen =$_POST['DeskripsiDokumen'];
$userid = $_SESSION['userid'];	

$sql = "INSERT INTO kursus (Kursus_id,NamaKursus, Kategori, Bidang, Lokasi, Anjuran, datepicker,datepicker2, DeskripsiDokumen,  userid) VALUES ('$Kursus_id', '$NamaKursus ','$Kategori' , '$Bidang', '$Lokasi','$Anjuran','$datepicker','$datepicker2','$DeskripsiDokumen','$userid');";


if (mysqli_query($connect, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);

header ("Location:Kursus.php");
}
?>


