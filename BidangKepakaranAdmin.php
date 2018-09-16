 <?php require_once "connect.php" ; 
 require_once "session.php" ;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-trLansitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/responsive/w3.css" rel="stylesheet"/>
<link href="/responsive/layout.css" rel="stylesheet"/>
<link href="/responsive/Padam.php" rel="stylesheet" />
<link rel="icon" type="image/png" sizes="192x192" href="/responsive/images/LogobaruJPKN.jpg">
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
            Profail kepakaran > Bidang Kepakaran
    </div>
    <div class="textarea">
    	

    <div class="bb">Bidang Kepakaran Pilihan</div>
      <div class="cc">
  Pencalonan 3 bidang pilihan berdasarkan 8 bidang kepakaran ICT.</div>


<div class="databox">
  <form id="form1" name="form1" method="post" action="BidangKepakaranProAdmin.php"><table width="auto" height="222" border="0" align="center" cellpadding="2" cellspacing="1">
  <tr>
    <td width="194"><font color="red">*</font> Bidang Pilihan Pertama :</td>
    <td width="201"><span id="sprytextfield1" span class="textfieldRequiredMsg">Please insert data.</span></span>
      <label for="PilihanPertama"></label>      <select name="PilihanPertama" class="StyleTxtField1">
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
    <td><font color="red">*</font> Bidang Pilihan Kedua :</td>
    <td><label for="PilihanKedua"></label>
      <select name="PilihanKedua" class="StyleTxtField1">
        <option value="" disabled selected>--------------Sila Pilih--------------</option>
        <option value="PENGURUSAN MAKLUMAT" >PENGURUSAN MAKLUMAT</option>
        <option value="PENGURUSAN KESELAMATAN MAKLUMAT">PENGURUSAN KESELAMATAN MAKLUMAT</option>
        <option value="PENGURUSAN PANGKALAN DATA">PENGURUSAN PANGKALAN DATA</option>
        <option value="PENGURUSAN PROJEK">PENGURUSAN PROJEK</option>
        <option value="PENGURUSAN PUSAT DATA">PENGURUSAN PUSAT DATA</option>
        <option value="PENGURUSAN RANGKAIAN">PENGURUSAN RANGKAIAN</option>
        <option value="PEMBANGUNAN SISTEM">PEMBANGUNAN SISTEM</option>
        <option value="PERANCANGAN STRATEGIK ICT">PERANCANGAN STRATEGIK ICT</option>
      </select>    </tr>
      
  <tr>
    <td height="51"><font color="red">*</font> Bidang Pilihan Ketiga :</td>
    <td><span id="sprytextfield3">
      <label for="PilihanKetiga"></label>
    <select name="PilihanKetiga" class="StyleTxtField1">
        <option value="" disabled selected>--------------Sila Pilih--------------</option>
        <option value="PENGURUSAN MAKLUMAT" >PENGURUSAN MAKLUMAT</option>
        <option value="PENGURUSAN KESELAMATAN MAKLUMAT">PENGURUSAN KESELAMATAN MAKLUMAT</option>
        <option value="PENGURUSAN PANGKALAN DATA">PENGURUSAN PANGKALAN DATA</option>
        <option value="PENGURUSAN PROJEK">PENGURUSAN PROJEK</option>
        <option value="PENGURUSAN PUSAT DATA">PENGURUSAN PUSAT DATA</option>
        <option value="PENGURUSAN RANGKAIAN">PENGURUSAN RANGKAIAN</option>
        <option value="PEMBANGUNAN SISTEM">PEMBANGUNAN SISTEM</option>
        <option value="PERANCANGAN STRATEGIK ICT">PERANCANGAN STRATEGIK ICT</option>
      </select></td>
  </tr>
  
  <tr>
    <td><input name="save" type="submit" class="StyleTxtField2" id="save" value="Save" />    	<button onclick="location.href = 'PenglibatanProjekAdmin.php' " type="button" class="StyleTxtField2">Next Page</button></td></td>
    <td>&nbsp;</td>
    
  </tr>
  
</table>

    
  </form>
</div>


    </div>
     

    <div class="textarea"><div class="box5">A. BIDANG KEPAKARAN ICT</div>
  
  <div class="box6">
    <table width="auto" border="0" cellspacing="1" cellpadding="2">
      <tr>
        <td width="auto">01)</td>
        <td width="auto">Pencalonan Perunding ICT Bagi Bidang Teras (Pilihan Pertama</td>
      </tr>
           <tr>
        <td width="auto">02)</td>
        <td width="auto">Pencalonan Perunding ICT Bagi Bidang Teras (Pilihan Kedua)</td>
      </tr>
                <tr>
        <td width="auto">03)</td>
        <td width="auto">Pencalonan Perunding ICT Bagi Bidang Teras (Pilihan Ketiga)</td>
      </tr>
    </table>
  </div>

<table  width="auto" class="w3-table-all" cellspacing="1" cellpadding="2">

<thead>

  <tr class="w3-blue">
    
    <td width="156">Pilihan Pertama </td>
    <td width="156">Pilihan Kedua</td>
     <td width="156">Pilihan Ketiga</td>
      <td width="70">Tindakan</td>


    
  </tr><?php 

if(isset($_SESSION['userid'])){
	
	include ("connect.php");
	
	$userid = $_SESSION['userid'];
	$sql = "SELECT * FROM bidangkepakaran WHERE userid= '$userid' ORDER BY  BidangKepakaran_id ASC ";
	
	$result = $connect ->query($sql);
	if ($result ->num_rows > 0){
		
	while ($row =  $result -> fetch_assoc())
		{


$BidangKepakaran_id = $row['BidangKepakaran_id'];
$PilihanPertama= $row['PilihanPertama'];
$PilihanKedua= $row['PilihanKedua'];
$PilihanKetiga =$row['PilihanKetiga'];


$Padam2Admin = "<a href=\"/responsive/Padam2Admin.php?i=$BidangKepakaran_id&a=1\" onclick=\"return confirm('Padam')\">delete</a>";



echo "<tr>";
echo "<td>$PilihanPertama</td><td>$PilihanKedua</td><td>$PilihanKetiga</td><td>$Padam2Admin</td>";

echo "</tr>";


		}
	}
	else{
		echo "0 results";
	}
	$connect->close();
	
	
}


?>
  
</table>
</div> </div>
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
</script>
</body>
</html>
