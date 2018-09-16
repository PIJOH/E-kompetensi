 <?php require_once  'connect.php';
require ("session.php");


if(isset($_POST['save'])) 
{
$a3_id = $_POST['a3_id'];
$Anugerah = $_POST['Anugerah'];
$Penglibatan = $_POST['Penglibatan'];
$Sijil = $_POST['Sijil'];
$userid = $_SESSION['userid'];

$sql = "INSERT INTO a3 (a3_id, Anugerah, Penglibatan, Sijil, userid) VALUES ('$a3_id','$Anugerah', '$Penglibatan',  '$Sijil', '$userid');";


if (mysqli_query($connect, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header ("Location: Kriteria A3Admin.php");
}
?>
>