<?php require_once "connect.php" ;
include ("session.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/responsive/layout.css" rel="stylesheet"/>
<link href="/responsive/Padam.php" rel="stylesheet" />
<link href="/responsive/templatecss.css" rel="stylesheet"/>
<link href="/responsive/menu.css" rel="stylesheet"/><style type="text/css">

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
	text-align: justify;
}
 
</style>
<style>
select:invalid {
	color:#CCC;
}
.container .row .col-8.col-m-9 .textarea {
	font-size: 18px;
}
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
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
  <script>
  $( function() {
    $( "#datepicker3" ).datepicker();
  } );
  </script>
</head>
<body>

<div class="header">
 <div class="logo"></div>
  <div class="header2">
  
  	<nav>
   
        	<ul>
             
              <li><a href="index.php"> Keluar</a></li>
              
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
 <div class="h11">SKIM PERKHIDMATAN SISTEM MAKLUMAT</div>
       <li><a href="ProfailPegawaiAdmin.php">Profail Pegawai</a></li>
<li><a href="#">Profail Kepakaran<span class="sub-arrow"></span></a>
<ul> 
<li><a href="/responsive/BidangKepakaranAdmin.php">Bidang Kepakaran</a></li>
<li><a href="/responsive/PenglibatanProjekAdmin.php">Penglibatan Projek</a></li>
<li><a href="/responsive/KhidmatPerundinganAdmin.php">Khidmat Perundingan</a></li>
<li><a href="/responsive/KhidmatNasihatAdmin.php">Khidmat Nasihat</a></li>
<li><a href="/responsive/ProdukIlmiahAdmin.php">Penghasilan Produk Ilmiah</a></li>
</ul>
</li>
<li><a href="#">Profail Latihan dan Kursus<span class="sub-arrow"></span></a>
<ul>
<li><a href="PensijilanAdmin.php">Pensijilan Professional</a></li>
<li><a href="/responsive/KursusAdmin.php">Kursus</a></li>
</ul>
</li>
<li><a href="Kriteria A1Admin.php">Kriteria Kecemerlangan</a></li>
<li><a href="StatusAdmin.php">Status Pengesahan Projek</a></li>
<li><a href="SalinanAdmin.php">Senarai Salinan Dokumen</a></li>
<li><a href="LaporanAdmin.php">Laporan Kepakaran Individu</a></li>
<li><a href="#">Maklumbalas/Aduan</a></li>
</ul>
</div>
</div>
<div class="col-8 col-m-9">
	
    

    <div class="textarea">
    

    <div class="bb">Pensijilan Profesional</div>
      <div class="cc">
  Pensijilan Profedsional / Pengiktirafan profesional.</div>




<table width="auto" border="1" align="center" cellpadding="2" cellspacing="1" class="table table-striped table-bordered table-hover table-condensed" >
<?php
if(isset($_SESSION['userid'])){
if(isset($_POST['update']))
{
    //retrieve the post variables
    extract($_POST);

    $sql ="UPDATE pensijilan SET NamaPensijilan = '$NamaPensijilan', Institusi= '$Institusi', Bidang = '$Bidang', datepicker= '$datepicker', TahapPensijilan= '$TahapPensijilan', Peperiksaan= '$Peperiksaan', TempohSah = '$TempohSah', DeskripsiDokumen= '$DeskripsiDokumen' WHERE Pensijilan_id = $Pensijilan_id";
	
		
	$result=$connect->query($sql);
    if($result)
    {
       header ("Location:PensijilanAdmin.php"); 
    }
 else      
 {
     echo"<h1>ERROR performing queries.<h1>".mysqli_error($connect);
     die(); 
 }
  
}
else if(isset($_GET['a']))
{
 
     
    $Edit5 = $_GET['a'];
    $Pensijilan_id = $_GET['i'];
    
    //if a == 1 EDIT
    if($Edit5 = 2)
    {

        $sql = "SELECT * FROM pensijilan WHERE Pensijilan_id = '$Pensijilan_id'";
                if($result = mysqli_query($connect, $sql))
        {
            if(mysqli_num_rows($result)>0)//check if there is a result
            {
                $row = mysqli_fetch_assoc($result);
						

$Pensijilan_id = $row['Pensijilan_id'];
$NamaPensijilan = $row['NamaPensijilan'];
$Institusi = $row['Institusi'];
$Bidang  = $row['Bidang'];
$datepicker =$row['datepicker'];
$TahapPensijilan =$row['TahapPensijilan'];
$Peperiksaan =$row['Peperiksaan'];
$TempohSah =$row['TempohSah'];
$DeskripsiDokumen =$row['DeskripsiDokumen'];


                echo'<form method = "POST" action="/responsive/Edit5.php"">';
                echo"<strong>Kemaskini Maklumat</strong>";
                echo'<table align ="center" border="1">';
				
				echo"<tr><td>ID</td><td><input type='text' name ='Pensijilan_id' size = '10' maxlength = '10' value = '$Pensijilan_id' readonly></td></tr>";
  ?>              
  <tr>
    <td width="173">Nama Pensijilan:</td>
    <td><span id="sprytextfield1">
      <label for="NamaPensijilan"></label>
      <input name="NamaPensijilan" type="text" class="StyleTxtField1" id="NamaPensijilan" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Institusi</td>
    <td><span id="sprytextfield2">
      <label for="Institusi"></label>
      <input name="Institusi" type="text" class="StyleTxtField1" id="Institusi" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Bidang</td>
        <td width="279"><span id="sprytextfield3">
           <label for="Bidang"></label>      <select name="Bidang" class="StyleTxtField1">
        <option value="" disabled selected>--------------Sila Pilih--------------</option>
        <option value="PENGURUSAN MAKLUMAT" >PENGURUSAN MAKLUMAT</option>
        <option value="PENGURUSAN KESELAMATAN MAKLUMAT">PENGURUSAN KESELAMATAN MAKLUMAT</option>
        <option value="PENGURUSAN PANGKALAN DATA">PENGURUSAN PANGKALAN DATA</option>
        <option value="PENGURUSAN PROJEK">PENGURUSAN PROJEK</option>
        <option value="PENGURUSAN PUSAT DATA">PENGURUSAN PUSAT DATA</option>
        <option value="PENGURUSAN RANGKAIAN">PENGURUSAN RANGKAIAN</option>
        <option value="PEMBANGUNAN SISTEM">PEMBANGUNAN SISTEM</option>
        <option value="PERANCANGAN STRATEGIK ICT">PERANCANGAN STRATEGIK ICT</option>
      </select>      <span class="textfieldRequiredMsg">A value is required.</span></span></td></tr>

  <tr>
    <td>Tahun</td>
    <td><span id="sprytextfield4">
      <label for="datepicker"></label>
      
          <select id="datepicker" name="datepicker" class="StyleTxtField1" >
            <option value="" disabled selected>--------------Sila Pilih--------------</option>
            <option value="2014" >2014</option>
            <option value="2015">2015</option>
            <option value="2016">2015</option>
            <option value="2017">2015</option>
          </select>       
           </tr>


  
         
  <tr>
    <td>Tahap Pensijilan</td>
    <td><span id="sprytextfield5">
        <label for="TahapPensijilan"></label>
      <input name="TahapPensijilan" type="text" class="StyleTxtField1" id="TahapPensijilan" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Peperiksaan</td>
    <td><span id="sprytextfield6">
       <label for="Peperiksaan"></label>
      <input name="Peperiksaan" type="text" class="StyleTxtField1" id="Peperiksaan" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
    <td>Tempoh Sah Sijil</td>
    <td><span id="sprytextfield7">
       <label for="TempohSah"></label>
      <input name="TempohSah" type="text" class="StyleTxtField1" id="TempohSah" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
    <tr>
    <td>Deskripsi Dokumen</td>
    <td><span id="sprytextfield8">
      <label for="DeskripsiDokumen"></label>
      <input name="DeskripsiDokumen" type="text" class="StyleTxtField1" id="DeskripsiDokumen" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
</table>
<?php
               
				
	             echo"<tr><td colspan = '2' align ='center'><input type ='submit' name='update' value = 'Update'>"
                ."</td>
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


  
 <table width="361" height="75" border="0" align="center" cellpadding="2" cellspacing="1">

</table>

    
  </form>
</div>


    </div>
     

  </div>

<div class="col-3 col-m-12">
 
</div>

</div>
	
  
    
<div class="footer">
  <p>Copyright @ JPKN 2017.</p>
</div>
<script>
function msg(){
	
	alert("Succesfully Saved.");
	}
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
</script>
</body>
</html>
