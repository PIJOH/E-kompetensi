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

<div class="dd">Penglibatan dalam MS ISO/ ISMS/ 5S / Keselamatan Perlindungan / Jawatankuasa.</div>
 <table width="auto" align="center" border="0" cellspacing="1" cellpadding="2"><?php
if(isset($_SESSION['userid'])){
if(isset($_POST['update']))
{
    //retrieve the post variables
    extract($_POST);

    $sql ="UPDATE a2 SET Pensijilan = '$Pensijilan' , Penglibatan = '$Penglibatan', Anugerah = '$Anugerah' WHERE a2_id = $a2_id";


	$result=$connect->query($sql);
    if($result)
    {
           header ("Location:Kriteria A2Admin.php"); 
}
 else      
 {
     echo"<h1>ERROR performing queries.<h1>".mysqli_error($connect);
     die(); 
 }
  
}
else if(isset($_GET['a']))
{
 
     
    $EditA2Admin = $_GET['a'];
    $a2_id = $_GET['i'];
    
    //if a == 1 EDIT
    if($EditA2Admin = 2)
    {

        $sql = "SELECT * FROM a2 WHERE a2_id = '$a2_id'";
                if($result = mysqli_query($connect, $sql))
        {
            if(mysqli_num_rows($result)>0)//check if there is a result
            {
                $row = mysqli_fetch_assoc($result);
						

$a2_id = $row['a2_id'];
$Pensijilan = $row['Pensijilan'];
$Penglibatan = $row['Penglibatan'];
$Anugerah = $row['Anugerah'];

                echo'<form method = "POST" action="/responsive/EditA2Admin.php"">';
                echo"<strong>Kemaskini Maklumat</strong>";
                echo'<table align ="center" border="2">';
				
				echo"<tr><td>ID</td><td><input type='text' name ='a2_id' size = '10' maxlength = '10' value = '$a2_id' readonly></td></tr>";
  ?> 
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
  </tr><?php
               
				
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

<script type="text/javascript">
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2");
var sprytextarea3 = new Spry.Widget.ValidationTextarea("sprytextarea3");
</script>
</body>
  
    
<div class="footer">
  <p>Copyright @ JPKN 2017.</p>
</div>


</body>
</html>
