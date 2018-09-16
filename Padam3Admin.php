<?php

session_start();
if(isset($_SESSION['userid'])){
	
	
	      // connect database
	include ("connect.php");

    if (isset($_GET['a']))
    {
  
      

        $Padam3Admin = $_GET['a'];
        $penglibatanprojekid = $_GET['i'];
        if ($Padam3Admin==1)
        {
            // confirm first

            $sql ="DELETE FROM penglibatanprojek WHERE penglibatanprojekid=$penglibatanprojekid";
            if (mysqli_query($connect, $sql))
            {
                echo "<script>window.alert('Row successfully deleted'); window.location = ('PenglibatanProjekAdmin.php')</script>";          
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
