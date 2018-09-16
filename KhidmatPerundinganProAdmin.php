<?php 
require ("connect.php"); 



if(isset($_POST['save'])) 
{
$KhidmatPerundinganid = $_POST['KhidmatPerundinganid '];
$NamaPerundingan = $_POST['NamaPerundingan'];
$Kementerian= $_POST['Kementerian'];
$Jabatan= $_POST['Jabatan'];
$Bidang= $_POST['Bidang'];
$Peringkat= $_POST['Peringkat'];
$datepicker= $_POST['datepicker'];
$datepicker2= $_POST['datepicker2'];
$DeskripsiDokumen= $_POST['DeskripsiDokumen'];
$userid = $_GET['userid'];	
$SalinanDokumen= $_POST['SalinanDokumen'];

$sql = "INSERT INTO khidmatperundingan (KhidmatPerundinganid,NamaPerundingan, Kementerian, Jabatan, Bidang, Peringkat, datepicker, datepicker2, DeskripsiDokumen, userid,SalinanDokumen) VALUES ('$KhidmatPerundinganid','$NamaPerundingan', '$Kementerian' , '$Jabatan', '$Bidang', '$Peringkat', '$datepicker',  '$datepicker2','$DeskripsiDokumen',  '$userid', '$SalinanDokumen');";


if (mysqli_query($connect, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);

header ("Location: KhidmatPerundinganAdmin.php");
}
?>


