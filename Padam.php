<?php

session_start();
if(isset($_SESSION['userid'])){
	
	
	      // connect database
	include ("connect.php");

    if (isset($_GET['a']))
    {
  
      

        $Padam = $_GET['a'];
        $ProfailPegawaiid = $_GET['i'];
        if ($Padam==1)
        {
            // confirm first

            $sql ="DELETE FROM profailpegawai WHERE ProfailPegawaiid=$ProfailPegawaiid";
            if (mysqli_query($connect, $sql))
            {
                echo "<script>window.alert('Row successfully deleted'); window.location = ('BeforeTemplate.php')</script>";          
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