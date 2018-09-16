 <?php require_once  'connect.php';
require ("session.php");


if(isset($_POST['save'])) 
{
$c_id = $_POST['c_id'];
$PakarBidang = $_POST['PakarBidang'];
$Penceramah = $_POST['Penceramah'];
$Penulis = $_POST['Penulis'];
$Pembentang = $_POST['Pembentang'];
$Penyelidik = $_POST['Penyelidik'];
$Perunding = $_POST['Perunding'];
$userid = $_SESSION['userid'];

$sql = "INSERT INTO c (c_id,  PakarBidang, Penceramah, Penulis, Pembentang, Penyelidik, Perunding,  userid) VALUES ('$c_id','$PakarBidang', '$Penceramah', '$Penulis', '$Pembentang', '$Penyelidik', '$Perunding', '$userid');";


if (mysqli_query($connect, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header ("Location: Kriteria CAdmin.php");
}
?>
>