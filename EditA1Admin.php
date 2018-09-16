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
             
             
              <li><a href="keluar.php">Keluar</a></li>
              
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
 

<div class="textarea">
<div class="databox">
 
<table width="400" align="center" border="0" cellspacing="1" cellpadding="2"><?php

if(isset($_SESSION['userid'])){
if(isset($_POST['update']))
{
    //retrieve the post variables
    extract($_POST);

   $sql= "UPDATE a1 SET NamaSistem='$NamaSistem', url='$url', TahunDibangunkan ='$TahunDibangunkan', TahunDigunakan = '$TahunDigunakan', EmpunyaSistem= '$EmpunyaSistem', Anugerah = '$Anugerah' WHERE a1_id = $a1_id ";

	$result=$connect->query($sql);
    if($result)
    {
       header ("Location:Kriteria A1Admin.php"); 
	   exit();
    }
 else      
 {
     echo"<h1>ERROR performing queries.<h1>".mysqli_error($connect);
     die(); 
 }
  
}
else if(isset($_GET['a']))
{
 
     
    $EditA1 = $_GET['a'];
    $a1_id = $_GET['i'];
    
    //if a == 1 EDIT
    if($EditA1 = 2)
    {

        $sql = "SELECT * FROM a1 WHERE a1_id = '$a1_id'";
                if($result = mysqli_query($connect, $sql))
        {
            if(mysqli_num_rows($result)>0)//check if there is a result
            {
                $row = mysqli_fetch_assoc($result);
						
$a1_id = $row['a1_id'];
$NamaSistem = $row['NamaSistem'];
$url =$row['url'];
$TahunDibangunkan = $row['TahunDibangunkan'];
$TahunDigunakan = $row['TahunDigunakan'];
$EmpunyaSistem = $row['EmpunyaSistem'];
$Anugerah = $row['Anugerah'];


                echo'<form method = "POST" action="/responsive/EditA1Admin.php">';
                echo"<strong>Kemaskini Maklumat</strong>";
                echo'<table align ="center" border="2">';
				
				echo"<tr><td>ID</td><td><input type='text' name ='a1_id' size = '10' maxlength = '10' value = '$a1_id' readonly></td></tr>";
  ?>              
  <tr>
    <td>Nama Sistem:</td>
    <td><span id="sprytextfield1">
      <label for="NamaSistem"></label>
      <input type="text" name="NamaSistem" id="NamaSistem" class="StyleTxtField1"/>
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Url:</td>
    <td><span id="sprytextfield2">
      <label for="url"></label>
      <input type="text" name="url" id="url" class="StyleTxtField1" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Tahun Dibangunkan:</td>
    <td><span id="sprytextfield3">
      <label for="TahunDibangunkan"></label>
      <input type="text" name="TahunDibangunkan" id="TahunDibangunkan" class="StyleTxtField1" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Tahun Digunakan</td>
    <td><span id="sprytextfield4">
      <label for="TahunDigunakan"></label>
      <input type="text" name="TahunDigunakan" id="TahunDigunakan" class="StyleTxtField1" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  
  <tr>
    <td>Empunya Sistem</td>
    <td><span id="sprytextfield5">
      <label for="EmpunyaSistem"></label>
      <input type="text" name="EmpunyaSistem" id="EmpunyaSistem" class="StyleTxtField1" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Anugerah</td>
    <td><span id="sprytextfield6">
      <label for="Anugerah"></label>
      <input type="text" name="Anugerah" id="Anugerah" class="StyleTxtField1"/>
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
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
exit();
?>
</table>


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
</script>
</body>
</html>
