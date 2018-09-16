<?php

session_start();
if(isset($_SESSION['userid'])){
	
	
	      // connect database
	include ("connect.php");

    if (isset($_GET['a']))
    {
  
      

        $Padam2 = $_GET['a'];
        $BidangKepakaran_id = $_GET['i'];
        if ($Padam2==1)
        {
            // confirm first

            $sql ="DELETE FROM bidangkepakaran WHERE BidangKepakaran_id=$BidangKepakaran_id";
            if (mysqli_query($connect, $sql))
            {
                echo "<script>window.alert('Row successfully deleted'); window.location = ('BidangKepakaran.php')</script>";          
            }
            else
            {   echo "<h2>Error performing queries.</h2>".mysqli_error($connect);            
                die();
            }
        }
    }
}
else
{
    
    session_destroy();
}   

?>
