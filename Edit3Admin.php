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
             
              <li><a href="index.php"> Keluar</a></li>
              
        	</ul>
    <a href="/responsive/homeAdmin.php"><div class="homeicon"><div class="homeicon"><div class="welcome">Welcome!<?php echo '&nbsp'; echo '&nbsp';echo $FName; echo '&nbsp'; echo $LName; ?></div></div>
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
            Profail kepakaran > Penglibatan projek
    </div>
    <div class="textarea">
    

    <div class="bb">Penglibatan Projek</div>
      <div class="cc">
  Projek pembangunan yang melibatkan aktiviti dalam merancang, mengkaji, membangun dan melaksanakan projek-projek ICT yang berimpak tinggi sama ada projek yang merentas agensi atau projek yang menyokong secara terus perkhidmatan utama agensi serta menyokong pencapaian program teras Misi Nasional untukmempertingkatkan penyampaian perkhidmatan awam. </div>

<div class="textarea"></div>
<div class="databox">
 <table width="auto" border="1" align="center" cellpadding="2" cellspacing="1" class="table table-striped table-bordered table-hover table-condensed" >
<?php
if(isset($_SESSION['userid'])){
if(isset($_POST['update']))
{
    //retrieve the post variables
    extract($_POST);

    $sql ="UPDATE penglibatanprojek SET NamaProjek= '$NamaProjek', Bidang= '$Bidang', datepicker= '$datepicker', datepicker2= '$datepicker2',tempohProjek= '$tempohProjek', salinanDokumen= '$salinanDokumen' WHERE penglibatanprojekid=$penglibatanprojekid";
	
	
	$result=$connect->query($sql);
    if($result)
    {
       header ("Location:PenglibatanProjekAdmin.php"); 
    }
 else      
 {
     echo"<h1>ERROR performing queries.<h1>".mysqli_error($connect);
     die(); 
 }
  
}
else if(isset($_GET['a']))
{
 
     
    $Edit3 = $_GET['a'];
    $penglibatanprojekid = $_GET['i'];
    
    //if a == 1 EDIT
    if($Edit3 = 2)
    {

        $sql = "SELECT * FROM penglibatanprojek WHERE penglibatanprojekid = '$penglibatanprojekid'";
                if($result = mysqli_query($connect, $sql))
        {
            if(mysqli_num_rows($result)>0)//check if there is a result
            {
                $row = mysqli_fetch_assoc($result);
						
$penglibatanprojekid = $row['penglibatanprojekid'];
$NamaProjek = $row['NamaProjek'];
$Bidang = $row['Bidang'];
$datepicker =$row['datepicker'];
$datepicker2 = $row['datepicker2'];
$tempohProjek =$row['tempohProjek'];
$salinanDokumen = $row['salinanDokumen'];

                echo'<form method = "POST" action="/responsive/Edit3Admin.php"">';
                echo"<strong>Kemaskini Maklumat</strong>";
                echo'<table align ="center" border="2">';
				
				echo"<tr><td>ID</td><td><input type='text' name ='penglibatanprojekid' size = '10' maxlength = '10' value = '$penglibatanprojekid' readonly></td></tr>";
  ?>              
      <tr>
       <td width="199" height="42">Nama Projek</td>
        <td width="289"><span id="sprytextfield1">
           <label for="NamaProjek"></label>
          <input name="NamaProjek" type="text" class="StyleTxtField1" id="NamaProjek" />    
           </tr>
   
      <tr>
        <td height="42">Bidang</td>
        <td><span id="sprytextfield2">
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
        <td height="38">Tarikh Mula</td>
        <td><span id="sprytextfield3">
          <label for="datepicker"></label>
          <input name="datepicker" type="text" class="StyleTxtField1" id="datepicker" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td height="38">Tarikh Tamat</td>
        <td><span id="sprytextfield4">
          <label for="datepicker2"></label>
          <input name="datepicker2" type="text" class="StyleTxtField1" id="datepicker2" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td height="38">Tempoh Projek</td>
        <td><span id="sprytextfield5">
          <label for="tempohProjek"></label>
          <input name="tempohProjek" type="text" class="StyleTxtField1" id="tempohProjek" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td height="38">Deskripsi Dokumen</td>
        <td><span id="sprytextfield6">
          <label for="salinanDokumen"></label>
          <input name="salinanDokumen" type="text" class="StyleTxtField1" id="salinanDokumen" />
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
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
</script>
</body>
</html>
