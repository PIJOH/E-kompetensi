 <?php require_once  'connect.php';
require ("session.php");


if(isset($_POST['save'])) 
{
$b_id = $_POST['b_id'];
$Penempatan = $_POST['Penempatan'];
$Tahun = $_POST['Tahun'];
$userid = $_SESSION['userid'];

$sql = "INSERT INTO b (b_id,  Penempatan, Tahun, userid) VALUES ('$b_id','$Penempatan', '$Tahun', '$userid');";


if (mysqli_query($connect, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header ("Location: Kriteria B.php");
}
?>