 <?php require_once  'connect.php';
require ("session.php");


if(isset($_POST['save'])) 
{
$d_id = $_POST['d_id'];
$Pemudahcara = $_POST['Pemudahcara'];
$Jawatankuasa = $_POST['Jawatankuasa'];
$Urusetia = $_POST['Urusetia'];
$userid = $_SESSION['userid'];

$sql = "INSERT INTO d (d_id, Pemudahcara , Jawatankuasa,Urusetia,  userid) VALUES ('$d_id', '$Pemudahcara', '$Jawatankuasa', '$Urusetia', '$userid');";


if (mysqli_query($connect, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header ("Location: Kriteria DAdmin.php");
}
?>