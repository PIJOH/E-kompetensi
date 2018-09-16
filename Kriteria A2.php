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
    <a href="/responsive/home.php"><div class="homeicon"><div class="welcome">Welcome!<?php echo '&nbsp'; echo '&nbsp';echo $FName; echo '&nbsp'; echo $LName; ?></div></div></a>
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
    

    <div class="bb">KRITERIA A</div>
      <div class="cc">
  Penglibatan dalam inovasi jabatan /individu iaitu sebarang idea baru atau atau penambahbaikan dalam bidang tugas yang memberi impak kepada proses kerja, kepuasan pelanggan, penjimatan kos dan sebagainya termasuk anugerah dan pengiktirafan yang diterima. Contohnya, penggerak transformasi jabatan termasuk Indeks Akauntabiliti, MS ISO, Amalan 5S, Perekayasan Proses Kerja, KIK dan sebagainya. </div>

<div class="textarea"></div>
<div class="databox">
  <form id="form1" name="form1" method="post" action="A2pro.php">
    <div class="dd">Penglibatan dalam MS ISO/ ISMS/ 5S / Keselamatan Perlindungan / Jawatankuasa.</div>
    <table width="auto" border="0" cellspacing="1" align="center" cellpadding="2">
  <tr>
    <td>Pensijilan / Jawatankuasa </td>
    <td><span id="sprytextarea1">
      <label for="Pensijilan"></label>
      <textarea name="Pensijilan" cols="45" rows="5" class="StyleTxtField11" id="Pensijilan"></textarea>
      <span class="textareaRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Penglibatan</td>
    <td><span id="sprytextarea2">
      <label for="Penglibatan"></label>
      <textarea name="Penglibatan" cols="45" rows="5" class="StyleTxtField11" id="Penglibatan"></textarea>
      <span class="textareaRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Anugerah</td>
    <td><span id="sprytextarea3">
      <label for="Anugerah"></label>
      <textarea name="Anugerah" cols="45" rows="5" class="StyleTxtField11" id="Anugerah"></textarea>
      <span class="textareaRequiredMsg">A value is required.</span></span></td>
  </tr>
</table>

   
  
      <table width="361" height="75" border="0" align="center" cellpadding="2" cellspacing="1">
  <tr>
    <td width="350">        	<input name="save" type="submit" class="StyleTxtField2" id="save" value="Save" onclick="msg()" />
        	<button onclick="location.href = 'Kriteria A1.php' " type="button" class="StyleTxtField2">Back Page</button>
        	<button onclick="location.href = 'Kriteria A3.php' " type="button" class="StyleTxtField2">Next Page</button></td>
  </tr>
</table>
</form>
</div>
</div>

        <div class="textarea"> <div class="box5">Penglibatan dalam MS ISO/ ISMS/ 5S / Keselamatan Perlindungan / Jawatankuasa.</div>
 <div class="box6">

  </div>

<table  width="auto" class="w3-table-all" cellspacing="1" cellpadding="2">

<thead>

  <tr class="w3-blue">
    <td width="auto">Bil</td>
    <td width="auto">Pensijilan</td>
    <td width="auto">Penglibatan</td>
        <td width="auto">Anugerah</td>
    <td width="auto">Padam</td>
     <td width="auto">Edit</td>
   
    
  </tr>
  
<?php if(isset($_SESSION['userid'])){
	
	include ("connect.php");
	
	$userid = $_SESSION['userid'];
	$sql = "SELECT * FROM a2 WHERE userid= '$userid' ORDER BY  a2_id ASC ";
	
	$result = $connect ->query($sql);
	if ($result ->num_rows > 0){
		
	while ($row =  $result -> fetch_assoc())
		{


$a2_id = $row['a2_id'];
$Pensijilan = $row['Pensijilan'];
$Penglibatan = $row['Penglibatan'];
$Anugerah = $row['Anugerah'];



$PadamA2 = "<a href=\"/responsive/PadamA2.php?i=$a2_id &a=1\" onclick=\"return confirm('Padam')\">delete</a>";
$EditA2 = "<a href=\"/responsive/EditA2.php?i=$a2_id &a=2\" onclick=\"return confirm('Edit')\">edit</a>";




echo "<tr>";
echo "<td>$a2_id </td><td>$Pensijilan</td><td>$Penglibatan</td><td>$Anugerah</td><td>$PadamA2</td><td>$EditA2</td></td>";

echo "</tr>";


		}
	}
	else{
		echo "0 results";
	}
	$connect->close();
	
	
}
?> </table></thead></div>

	</div>
    </div>
    </div>
<script type="text/javascript">
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2");
var sprytextarea3 = new Spry.Widget.ValidationTextarea("sprytextarea3");
</script>
</body>
  
    
<div class="footer">
  <p>Copyright @ JPKN 2017.</p>
</div>
<hr />
</body>
</html>
