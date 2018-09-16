<?php require_once "connect.php" ;
include("session.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/responsive/layout.css" rel="stylesheet"/>
<link href="/responsive/templatecss.css" rel="stylesheet"/>
<link href="/responsive/w3.css" rel="stylesheet"/>
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
</head>
<body>

<div class="header">
 <div class="logo"></div>
  <div class="header2">
  
  	<nav>
   
        	<ul>
             
              <li><a href="keluar.php"> Keluar</a></li>
              
        	</ul>
    <a href="/responsive/homeAdmin.php"><div class="homeicon"><div class="welcome">Welcome!<?php echo '&nbsp'; echo '&nbsp';echo $FName; echo '&nbsp'; echo $LName; ?></div></div></a>
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

<li><a href="SalinanAdmin.php">Senarai Salinan Dokumen</a></li>
<li><a href="LaporanAdmin.php">Laporan Kepakaran Individu</a></li>

</ul>
</div>
</div>

<div class="col-8 col-m-9">
			<div class="toolbox">
            Profail kepakaran > Khidmat Nasihat
    </div>
    <div class="textarea">
    

    <div class="bb">Khidmat Nasihat</div>
      <div class="cc">
  Memberi panduan dan bimbingan kepada agensi dalam melaksanakan sesuatu projek ICT atau bagi tujuan menyelesaikan sesuatu masalah ICT.</div>


<div class="databox">
  <form id="form1" name="form1" method="post" action="/responsive/KhidmatNasihatProAdmin.php"><table width="auto" border="0" align="center" cellpadding="2" cellspacing="1">
  <tr>
    <td width="147">Nama Nasihat</td>
    <td width="202"><span id="sprytextfield1">
      <label for="NamaNasihat"></label>
      <input name="NamaNasihat" type="text" class="StyleTxtField1" id="NamaNasihat" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Kementerian</td>
    <td><span id="sprytextfield2">
      <label for="Kementerian"></label>
      <input name="Kementerian" type="text" class="StyleTxtField1" id="Kementerian" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Jabatan</td>
    <td><span id="sprytextfield3">
      <label for="Jabatan"></label>
      <input name="Jabatan" type="text" class="StyleTxtField1" id="Jabatan" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Bidang</td>
    <td><span id="sprytextfield4">
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
    <td>Jawatan </td>
    <td><span id="sprytextfield5">
      <label for="Jawatan"></label>
      <input name="Jawatan" type="text" class="StyleTxtField1" id="Jawatan" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Peringkat</td>
    <td><span id="sprytextfield6">
      <label for="Peringkat"></label>
      <input name="Peringkat" type="text" class="StyleTxtField1" id="Peringkat" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Tarikh Mula</td>
    <td><span id="sprytextfield7">
      <label for="datepicker"></label>
      <input name="datepicker" type="text" class="StyleTxtField1" id="datepicker" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Tarikh Tamat</td>
    <td><span id="sprytextfield8">
      <label for="datepicker2"></label>
      <input name="datepicker2" type="text" class="StyleTxtField1" id="datepicker2" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Deskripsi Dokumen</td>
    <td><span id="sprytextfield9">
      <label for="DeskripsiDokumen"></label>
      <input name="DeskripsiDokumen" type="text" class="StyleTxtField1" id="DeskripsiDokumen" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
</table>

   
     <table width="361" height="75" border="0" align="center" cellpadding="2" cellspacing="1">
  <tr>
    <td width="350">        	<input name="save" type="submit" class="StyleTxtField2" id="save" value="Save" />
        	<button onclick="location.href = 'KhidmatPerundinganAdmin.php' " type="button" class="StyleTxtField2">Back Page</button>
        	<button onclick="location.href = 'ProdukIlmiahAdmin.php' " type="button" class="StyleTxtField2">Next Page</button></td>
  </tr>
</table>
  </form>

</div>


    </div>
    <div class="textarea"> <div class="box5">C. MAKLUMAT KEPAKARAN</div>
 <div class="box6">
    <table width="auto" border="0" cellspacing="1" cellpadding="2">
      <tr>
        <td width="auto">17)</td>
        <td width="auto">Khidmat nasihat yang berkaitan dengan bidang ICT bagi 5 tahun terakhir.</td>
      </tr>
         
    </table>
  </div>

<table  width="auto" class="w3-table-all" cellspacing="1" cellpadding="2">

<thead>

  <tr class="w3-blue">
  
    <td width="170">Nama Khidmat Nasihat</td>
     <td width="120">Kementerian</td>
      <td width="120">Jabatan</td>
    <td width="120">Bidang</td>
     <td width="120">Jawatan</td>
      <td width="120">Peringkat</td>
    <td width="120">Tarikh Mula</td>
    <td width="120">Tarikh Tamat</td>
    <td width="120">Deskripsi Dokumen</td>
    <td width="auto">Padam</td>
     <td width="auto">Edit</td>
   
    
  </tr><?php 

if(isset($_SESSION['userid'])){
	
	include ("connect.php");
	
	$userid = $_SESSION['userid'];
	$sql = "SELECT * FROM khidmatnasihat WHERE userid= '$userid' ORDER BY  KhidmatNasihat_id  ASC ";
	
	$result = $connect ->query($sql);
	if ($result -> num_rows > 0){
		
	while ($row =  $result -> fetch_assoc())
		{
$KhidmatNasihat_id = $row['KhidmatNasihat_id'];
$NamaNasihat = $row['NamaNasihat'];
$Kementerian= $row['Kementerian'];
$Jabatan= $row['Jabatan'];
$Bidang= $row['Bidang'];
$Jawatan= $row['Jawatan'];
$Peringkat= $row['Peringkat'];
$datepicker = $row['datepicker'];
$datepicker2 = $row['datepicker2'];
$DeskripsiDokumen = $row['DeskripsiDokumen'];

$Padam6Admin = "<a href=\"/responsive/Padam6Admin.php?i=$KhidmatNasihat_id&a=1\" onclick=\"return confirm('Padam')\">delete</a>";
$Edit6Admin = "<a href=\"/responsive/Edit6Admin.php?i=$KhidmatNasihat_id&a=2\" onclick=\"return confirm('Edit')\">edit</a>";




echo "<tr>";
echo "<td>$NamaNasihat</td><td>$Kementerian</td><td>$Jabatan</td><td>$Bidang</td><td>$Jawatan</td><td>$Peringkat</td><td>$datepicker</td><td>$datepicker2</td><td>$DeskripsiDokumen</td><td>$Padam6Admin</td><td>$Edit6Admin</td></td>";

echo "</tr>";


		}
	}
	else{
		echo "0 results";
	}
	$connect->close();
	
	
}


?>
  
</table></thead></div></div> 

  </div>

<div class="col-3 col-m-12">
 
</div>

</div>
	
  
    
<div class="footer">
  <p>Copyright @ JPKN 2017.</p>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
</script>
</body>
</html>
