   <?php require_once "connect.php" ;
include("session.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/responsive/layout.css" rel="stylesheet"/>
<link href="/responsive/menu.css" rel="stylesheet"/>
<link href="/responsive/w3.css" rel="stylesheet"/>
<style type="text/css">
.container .row .col-8.col-m-9 form .textarea p {
	font-family: Arial, Helvetica, sans-serif;N     
	font-size: 12px;
	color: #000;
}
.row .col-8.col-m-9 .textarea #form1 p2 {
	font-size: 14px;
}
.row .col-8.col-m-9 .textarea p h12 {
}
.row .col-8.col-m-9 .textarea .databox table {
	text-align: center;
}

.container .row .col-8.col-m-9 .textarea .databox #form1 table tr td {
	text-align: left;
}
.container .row .col-8.col-m-9 .textarea .databox #form1 .dd {
	font-weight: bold;
}
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/responsive/templatecss.css" />
  <link href="/responsive/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
  <link href="/responsive/SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
 <script src="/responsive/jquery-1.12.4.js" type="text/javascript"></script>
<script src="/responsive/jquery-ui.js" type="text/javascript"></script>
<script src="/responsive/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="/responsive/SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<script>
  $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  </script>
</head>
<body>

<div class="header">
 <div class="logo"></div>
  <div class="header2">
  
  	<nav>
   
        	<ul>
             
              <li><a href="#"> Keluar</a></li>
              
        	</ul>
    <a href="/responsive/home.php"><div class="homeicon"></div></a>
   	</nav>
  
  </div>
</div>
<div class="container">
<div class="row">

<div class="col-3 col-m-3">
<div class="menu">
  <ul class="menu-ul">
  <div class="h11">
 SKIM PERKHIDMATAN SISTEM MAKLUMAT</div>
       <li><a href="#">Profail Pegawai</a></li>
<li><a href="#">Profail Kepakaran<span class="sub-arrow"></span></a>
<ul> 
<li><a href="/responsive/BidangKepakaran.php">Bidang Kepakaran</a></li>
<li><a href="/responsive/PenglibatanProjek.php">Penglibatan Projek</a></li>
<li><a href="/responsive/KhidmatPerundingan.php">Khidmat Perundingan</a></li>
<li><a href="/responsive/KhidmatNasihat.php">Khidmat Nasihat</a></li>
<li><a href="#">Penghasilan Produk Ilmiah</a></li>
</ul>
</li>
<li><a href="#">Profail Latihan dan Kursus<span class="sub-arrow"></span></a>
<ul>
<li><a href="#">Pensijilan Professional</a></li>
<li><a href="#">Kursus</a></li>
</ul>
</li>
<li><a href="#">Status Pengesahan Projek</a></li>
<li><a href="#">Laporan Kepakaran Individu</a></li>
<li><a href="#">Maklumbalas/Aduan</a></li>
</ul>

</div>

</div>

<div class="col-8 col-m-9">
			<div class="toolbox">
            Kriteria Kecemerlangan
    </div>
    <div class="textarea">
    

    <div class="bb">KRITERIA C</div>
      <div class="cc">Pakar Bidang atau Subject Matter Expert (SME) / Penceramah / Penulis/ Pembentang / Penyelidik / Perunding
 </div>

<div class="textarea"></div>
<div class="databox">
 <?php
if(isset($_SESSION['userid'])){
if(isset($_POST['update']))
{
    //retrieve the post variables
    extract($_POST);

    $sql ="UPDATE c SET PakarBidang = '$PakarBidang' , Penceramah = '$Penceramah', Penulis = '$Penulis', Pembentang = '$Pembentang', Penyelidik = '$Penyelidik' , Perunding = '$Perunding' WHERE c_id = '$c_id' ";


	$result=$connect->query($sql);
    if($result)
    {
       header ("Location:Kriteria C.php"); 
    }
 else      
 {
     echo"<h1>ERROR performing queries.<h1>".mysqli_error($connect);
     die(); 
 }
  
}
else if(isset($_GET['a']))
{
 
     
    $EditC = $_GET['a'];
    $c_id = $_GET['i'];
    
    //if a == 1 EDIT
    if($EditC = 2)
    {

        $sql = "SELECT * FROM c WHERE c_id = '$c_id'";
                if($result = mysqli_query($connect, $sql))
        {
            if(mysqli_num_rows($result)>0)//check if there is a result
            {
                $row = mysqli_fetch_assoc($result);
						



$c_id = $row['c_id'];
$PakarBidang = $row['PakarBidang'];
$Penceramah = $row['Penceramah'];
$Penulis =$row['Penulis'];
$Pembentang = $row['Pembentang'];
$Penyelidik = $row['Penyelidik'];
$Perunding =$row['Perunding'];

                echo'<form method = "POST" action="/responsive/EditC.php"">';
                echo"<strong>Kemaskini Maklumat</strong>";
                echo'<table align ="center" border="2">';
				
				echo"<tr><td>ID</td><td><input type='text' name ='c_id' size = '10' maxlength = '10' value = '$c_id' readonly></td></tr>";
  ?>              
  <tr>
    <td width="210">Pakar Bidang / Subject Matter Expert</td>
    
    <td width="289"><span id="sprytextarea1">
      <label for="PakarBidang"></label>
      <textarea name="PakarBidang" cols="45" rows="5" class="StyleTxtField11" id="PakarBidang"></textarea>
      <span class="textareaRequiredMsg">A value is required.</span></span></td>
  </tr>
  
  <tr>
  <td>Penceramah</td>
   <td><span id="sprytextarea2">
     <label for="Penceramah"></label>
     <textarea name="Penceramah" cols="45" rows="5" class="StyleTxtField11" id="Penceramah"></textarea>
     <span class="textareaRequiredMsg">A value is required.</span></span></td>
  </tr>
  
  
  <tr>
  <td>Penulis </td>
   <td><span id="sprytextarea3">
     <label for="Penulis"></label>
     <textarea name="Penulis" cols="45" rows="5" class="StyleTxtField11" id="Penulis"></textarea>
     <span class="textareaRequiredMsg">A value is required.</span></span></td>
  </tr>
  
  <tr>
  <td>Pembentang</td>
   <td><span id="sprytextarea4">
     <label for="Pembentang"></label>
     <textarea name="Pembentang" cols="45" rows="5" class="StyleTxtField11" id="Pembentang"></textarea>
     <span class="textareaRequiredMsg">A value is required.</span></span></td>
  </tr>
  
  <tr>
  <td>Penyelidik</td>
   <td><span id="sprytextarea5">
     <label for="Penyelidik"></label>
     <textarea name="Penyelidik" cols="45" rows="5" class="StyleTxtField11" id="Penyelidik"></textarea>
     <span class="textareaRequiredMsg">A value is required.</span></span></td>
  </tr>
  
  <tr>
  <td>Perunding</td>
   <td><span id="sprytextarea6">
     <label for="Perunding"></label>
     <textarea name="Perunding" cols="45" rows="5" class="StyleTxtField11" id="Perunding"></textarea>
     <span class="textareaRequiredMsg">A value is required.</span></span></td>
  </tr>
  
  
  
  
  
  
  
  
  
  
    <?php
               
				
	             echo"<tr><td colspan = '2' align ='center'><input type ='submit' name='update' value = 'Update'>"
                ."&nbsp;</td>
				</tr>";
				
	

                
                //echo"<input type = 'hidden' name = 'c_num' valus = '$c_num'>"; //write this to extract POST
                echo'</table></form>';
            }
            else
            {
               echo"<h1>Selected row not found or has been deleted.<h1>".mysqli_error($connect);
               die(); 
            }
        }
        else
        {
            echo"<h1>ERROR performing queries.<h1>".mysqli_error($connect);
            die();            
        }
	}
}
}

?>
</table>
</div>
</div>


    
<div class="footer">
  <p>Copyright @ JPKN 2017.</p>
</div>

</script>
</body>
</html>
