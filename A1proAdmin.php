 <?php require_once  'connect.php';
require ("session.php");


if(isset($_POST['save'])) 
{
$a1_id = $_POST['a1_id'];
$NamaSistem = $_POST['NamaSistem'];
$url = $_POST['url'];
$TahunDibangunkan = $_POST['TahunDibangunkan'];
$TahunDigunakan = $_POST['TahunDigunakan'];
$EmpunyaSistem = $_POST['EmpunyaSistem'];
$Anugerah = $_POST['Anugerah'];
$userid = $_SESSION['userid'];

$sql = "INSERT INTO a1 (a1_id,NamaSistem, url , TahunDibangunkan, TahunDigunakan , EmpunyaSistem, Anugerah, userid) VALUES ('$a1_id','$NamaSistem', '$url ','$TahunDibangunkan ', '$TahunDigunakan', '$EmpunyaSistem', '$Anugerah','$userid');";


if (mysqli_query($connect, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header ("Location: Kriteria A1Admin.php");
}
?>
