 <?php require_once  'connect.php';
require ("session.php");


if(isset($_POST['save'])) 
{
$a2_id = $_POST['a2_id'];
$Pensijilan = $_POST['Pensijilan'];
$Penglibatan = $_POST['Penglibatan'];
$Anugerah = $_POST['Anugerah'];
$userid = $_SESSION['userid'];

$sql = "INSERT INTO a2 (a2_id,Pensijilan ,Penglibatan,Anugerah, userid) VALUES ('$a2_id','$Pensijilan ', '$Penglibatan ','$Anugerah','$userid');";


if (mysqli_query($connect, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header ("Location: Kriteria A2Admin.php");
}
?>
>