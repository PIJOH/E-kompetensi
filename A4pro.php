 <?php require_once  'connect.php';
require ("session.php");


if(isset($_POST['save'])) 
{
$a4_id = $_POST['a4_id'];

$Penglibatan = $_POST['Penglibatan'];
$Status = $_POST['Status'];
$datepicker = $_POST['datepicker'];
$userid = $_SESSION['userid'];

$sql = "INSERT INTO a4 (a4_id,Penglibatan, Status, datepicker, userid) VALUES ('$a3_id','$Penglibatan',  '$Status', '$datepicker', '$userid');";


if (mysqli_query($connect, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header ("Location: Kriteria A4.php");
}
?>