<?php require_once  'connect.php';
require ("session.php");


if(isset($_POST['save'])) 
{
$penglibatanprojekid = $_POST['penglibatanprojekid'];
$NamaProjek = $_POST['NamaProjek'];
$Bidang = $_POST['Bidang'];
$datepicker = $_POST['datepicker'];
$datepicker2 = $_POST['datepicker2'];
$tempohProjek = $_POST['tempohProjek'];
$salinanDokumen = $_POST['salinanDokumen'];
$userid = $_SESSION['userid'];

$sql = "INSERT INTO penglibatanprojek (penglibatanprojekid,NamaProjek,Bidang, datepicker, datepicker2, tempohProjek, salinanDokumen, userid) VALUES ('$penglibatanprojekid','$NamaProjek', '$Bidang','$datepicker', '$datepicker2', '$tempohProjek', '$salinanDokumen','$userid');";


if (mysqli_query($connect, $sql)) {
    echo '<script>window.alert("Row successfully SAVE");
	window.location = ("PenglibatanProjekAdmin.php");</script>';
	
} else {
	echo '<script>window.location = (" PenglibatanProjekAdmin.php");</script>';
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header ("Location: PenglibatanProjekAdmin.php");
}
?>
