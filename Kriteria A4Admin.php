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
             
              <li><a href="keluar.php"> Keluar</a></li>
              
        	</ul>
    <a href="/responsive/homeAdmin.php"><div class="homeicon"></div></a>
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
			<div class="toolbox">
            Kriteria Kecemerlangan
    </div>
    <div class="textarea">
    

    <div class="bb">KRITERIA A</div>
      <div class="cc">
  Penglibatan dalam inovasi jabatan /individu iaitu sebarang idea baru atau atau penambahbaikan dalam bidang tugas yang memberi impak kepada proses kerja, kepuasan pelanggan, penjimatan kos dan sebagainya termasuk anugerah dan pengiktirafan yang diterima. Contohnya, penggerak transformasi jabatan termasuk Indeks Akauntabiliti, MS ISO, Amalan 5S, Perekayasan Proses Kerja, KIK dan sebagainya. </div>

<div class="textarea"></div>
<div class="databox">
  <form id="form1" name="form1" method="post" action="A4proAdmin.php">
    <div class="dd">ICT / Pembangunan Sumber dan lain-lain.</div>
<table width="auto" align="center" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td width="133">Penglibatan</td>
    <td width="248"><span id="sprytextarea1">
      <label for="Penglibatan"></label>
      <textarea name="Penglibatan" cols="45" rows="5" class="StyleTxtField11" id="Penglibatan"></textarea>
      <span class="textareaRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><span id="sprytextfield1">
      <label for="Status"></label>
      <input name="Status" type="text" class="StyleTxtField1" id="Status" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Tarikh</td>
    <td><span id="sprytextfield2">
      <label for="datepicker"></label>
      <input name="datepicker" type="text" class="StyleTxtField1" id="datepicker" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
</table>
      <table width="361" height="75" border="0" align="center" cellpadding="2" cellspacing="1">
  <tr>
    <td width="350">        	<input name="save" type="submit" class="StyleTxtField2" id="save" value="Save" onclick="msg()" />
        	<button onclick="location.href = 'Kriteria A3Admin.php' " type="button" class="StyleTxtField2">Back Page</button>
        	<button onclick="location.href = 'Kriteria BAdmin.php' " type="button" class="StyleTxtField2">Next Page</button></td>
  </tr>
</table>
</form>
</div>
</div>


        <div class="textarea"> <div class="box5">ICT / Pembangunan Sumber dan lain-lain.</div>
 <div class="box6">

  </div>

<table  width="auto" class="w3-table-all" cellspacing="1" cellpadding="2">

<thead>

  <tr class="w3-blue">
    <td width="auto">Bil</td>
        <td width="auto">Penglibatan</td>
         <td width="auto">Status</td>
          <td width="auto">datepicker</td>
    <td width="auto">Padam</td>
     <td width="auto">Edit</td>
   
    
  </tr><?php 

if(isset($_SESSION['userid'])){
	
	include ("connect.php");
	
	$userid = $_SESSION['userid'];
	$sql = "SELECT * FROM a4 WHERE userid= '$userid' ORDER BY  a4_id ASC ";
	
	$result = $connect ->query($sql);
	if ($result ->num_rows > 0){
		
	while ($row =  $result -> fetch_assoc())
		{


$a4_id = $row['a4_id'];
$Penglibatan = $row['Penglibatan'];
$Status = $row['Status'];
$datepicker = $row['datepicker'];


$PadamA4Admin = "<a href=\"/responsive/PadamA4Admin.php?i=$a4_id &a=1\" onclick=\"return confirm('Padam')\">delete</a>";
$EditA4Admin = "<a href=\"/responsive/EditA4Admin.php?i=$a4_id &a=2\" onclick=\"return confirm('Edit')\">edit</a>";




echo "<tr>";
echo "<td>$a4_id </td><td>$Penglibatan</td><td>$Status</td><td>$datepicker</td><td>$PadamA4Admin</td><td>$EditA4Admin</td></td>";

echo "</tr>";


		}
	}
	else{
		echo "0 results";
	}
	$connect->close();
	
	
}


?>
  
</table></thead></div>
	</div>
    </div>
    </div>

    
<div class="footer">
  <p>Copyright @ JPKN 2017.</p>
</div>
<script type="text/javascript">
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>
