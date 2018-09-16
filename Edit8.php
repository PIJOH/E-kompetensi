
<?php 

require_once "connect.php";
include("session.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/responsive/layout.css" rel="stylesheet"/>
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
	text-align: left;
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
    <a href="/responsive/home.php"><div class="homeicon"><div class="homeicon"><div class="welcome">Welcome!<?php echo '&nbsp'; echo '&nbsp';echo $FName; echo '&nbsp'; echo $LName; ?></div></div>
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
            Profail kepakaran > Penghasilan Produk Ilmiah</div>
    <div class="textarea">
    <div class="bb">Penghasilan Produk Ilmiah</div>
      <div class="cc">
 Penerbitan Ilmiah / Pembentangan kertas kerja sepanjang perkhidmatan.</div>


<div class="databox">
 <table width="auto" border="1" align="center" cellpadding="2" cellspacing="1" class="table table-striped table-bordered table-hover table-condensed" >
<?php
if(isset($_SESSION['userid'])){
if(isset($_POST['update']))
{
    //retrieve the post variables
    extract($_POST);

   
	 $sql ="UPDATE produkilmiah SET NamaProduk= '$NamaProduk', Sesi = '$Sesi', Bidang= '$Bidang', Peringkat = '$Peringkat',datepicker= '$datepicker', TahapPenyediaan ='$TahapPenyediaan', DeskripsiDokumen ='$DeskripsiDokumen' WHERE ProdukIlmiah_id= $ProdukIlmiah_id";
	
	
	$result=$connect->query($sql);
    if($result)
    {
       header ("Location:ProdukIlmiah.php"); 
    }
 else      
 {
     echo"<h1>ERROR performing queries.<h1>".mysqli_error($connect);
     die(); 
 }
  
}
else if(isset($_GET['a']))
{
 
     
    $Edit8 = $_GET['a'];
    $ProdukIlmiah_id = $_GET['i'];
    
    //if a == 1 EDIT
    if($Edit8 = 2)
    {

        $sql = "SELECT * FROM produkilmiah WHERE ProdukIlmiah_id = '$ProdukIlmiah_id'";
                if($result = mysqli_query($connect, $sql))
        {
            if(mysqli_num_rows($result)>0)//check if there is a result
            {
                $row = mysqli_fetch_assoc($result);
						
					
$ProdukIlmiah_id = $row['ProdukIlmiah_id'];
$NamaProduk= $row['NamaProduk'];
$Sesi= $row['Sesi'];
$Bidang= $row['Bidang'];
$Peringkat= $row['Peringkat'];
$datepicker= $row['datepicker'];
$TahapPenyediaan= $row['TahapPenyediaan'];
$DeskripsiDokumen= $row['DeskripsiDokumen'];


                echo'<form method = "POST" action="/responsive/Edit8.php"">';
                echo"<strong>Kemaskini Maklumat</strong>";
                echo'<table align ="center" border="2">';
				
				echo"<tr><td>ID</td><td><input type='text' name = 'ProdukIlmiah_id' size = '10' maxlength = '10' value = '$ProdukIlmiah_id' readonly></td></tr>";
  ?>                       
  <tr>
    <td width="229">Nama Produk / Penerbitan Ilmiah:</td>
    <td width="202"><span id="sprytextfield1">
      <label for="NamaProduk"></label>
      <input name="NamaProduk" type="text" class="StyleTxtField1" id="NamaProduk" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Sesi / Lokasi:</td>
    <td><span id="sprytextfield2">
      <label for="Sesi"></label>
      <input name="Sesi" type="text" class="StyleTxtField1" id="Sesi" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Bidang</td>
    <td><span id="sprytextfield3">
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
      </select>      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Peringkat</td>
    <td><span id="sprytextfield4">
      <label for="Peringkat"></label>
      <input name="Peringkat" type="text" class="StyleTxtField1" id="Peringkat" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td height="43">Tahun</td>
    <td><span id="sprytextfield5">
      <label for="datepicker"></label>
      <input name="datepicker" type="text" class="StyleTxtField1" id="datepicker" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td height="74">Tahap Penyediaan</td>
    <td><p>
      <label>
<input type="checkbox" id="TahapPenyediaan[1]" name="TahapPenyediaan[1]" value="Membentang"  />
Membentang</label>
        <br />
        <label>
          <input type="checkbox" id="TahapPenyediaan[2]" name="TahapPenyediaan[2]" value="Menerbit"/>
          Menerbit</label>
        <br />
        <label>
          <input type="checkbox"  id="TahapPenyediaan[3]" name="TahapPenyediaan[3]" value="Menyewa"  />
          Menyewa</label>
        <br />
    </p></td>
  </tr>
  <tr>
    <td height="43">Deskripsi Dokumen</td>
    <td><span id="sprytextfield6">
      <label for="DeskripsiDokumen"></label>
      <input name="DeskripsiDokumen" type="text" class="StyleTxtField1" id="DeskripsiDokumen" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
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
     


  </div>

<div class="col-3 col-m-12">
 
</div>

</div>
	
  
    
<div class="footer">
  <p>Copyright @ JPKN 2017.</p>
</div>

</script>
<script>
function msg(){
	
	alert("Succesfully Saved.");
	}
</body>
</html>
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
