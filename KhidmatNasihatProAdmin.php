<?php 
include ("connect.php"); 
require_once ("session.php");


if(isset($_POST['save'])) 
{
	

$KhidmatNasihat_id = $_POST['KhidmatNasihat_id'];
$NamaNasihat = $_POST['NamaNasihat'];
$Kementerian= $_POST['Kementerian'];
$Jabatan= $_POST['Jabatan'];
$Bidang= $_POST['Bidang'];
$Jawatan= $_POST['Jawatan'];
$Peringkat= $_POST['Peringkat'];
$datepicker = $_POST['datepicker'];
$datepicker2 = $_POST['datepicker2'];
$DeskripsiDokumen = $_POST['DeskripsiDokumen'];
$userid = $_SESSION['userid'];	


$sql = "INSERT INTO khidmatnasihat(KhidmatNasihat_id, NamaNasihat, Kementerian, Jabatan, Bidang, Jawatan, Peringkat, datepicker, datepicker2, DeskripsiDokumen, userid) VALUES ('$KhidmatNasihat_id','$NamaNasihat','$Kementerian','$Jabatan','$Bidang','$Jawatan','$Peringkat','$datepicker','$datepicker2','$DeskripsiDokumen','$userid');";



if (mysqli_query($connect, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: Failed ";
}

mysqli_close($connect);

header ("Location: KhidmatNasihat.php");
}
?>


