 <?php require_once  'connect.php';
require ("session.php");


if(isset($_POST['save'])) 
{
$e_id = $_POST['e_id'];
$Aktiviti = $_POST['Aktiviti'];
$userid = $_SESSION['userid'];

$sql = "INSERT INTO e (e_id, Aktiviti,  userid) VALUES ('$e_id','$Aktiviti', '$userid');";


if (mysqli_query($connect, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header ("Location: Kriteria E.php");
}
?>
>