<?php require_once "connect.php" ;
include("session.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/responsive/layout.css" rel="stylesheet"/>
<link href="/responsive/w3.css" rel="stylesheet"/>
<link rel="stylesheet" href="/responsive/templatecss.css" />
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
 <script src="/responsive/jquery-1.12.4.js" type="text/javascript"></script>
<script src="/responsive/jquery-ui.js" type="text/javascript"></script>
<script src="/responsive/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script><script>
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
    <a href="/responsive/home.php"><div class="homeicon"><div class="homeicon"><div class="welcome">Welcome!<?php echo '&nbsp'; echo '&nbsp';echo $FName; echo '&nbsp'; echo $LName; ?></div></div></a>
   	</nav>
  
  </div>
</div>
<div class="container">
<div class="row">

<div class="col-3 col-m-3">
<div class="menu">
  <ul class="menu-ul">
    <div class="h11">SKIM PERKHIDMATAN SISTEM MAKLUMAT</div>
       <li><a href="#">Profail Pegawai</a></li>
<li><a href="#">Profail Kepakaran<span class="sub-arrow"></span></a>
<ul> 
<li><a href="/responsive/BidangKepakaran.php">Bidang Kepakaran</a></li>
<li><a href="/responsive/PenglibatanProjek.php">Penglibatan Projek</a></li>
<li><a href="/responsive/KhidmatPerundingan.php">Khidmat Perundingan</a></li>
<li><a href="/responsive/KhidmatNasihat.php">Khidmat Nasihat</a></li>
<li><a href="/responsive/ProdukIlmiah.php">Penghasilan Produk Ilmiah</a></li>
</ul>
</li>
<li><a href="#">Profail Latihan dan Kursus<span class="sub-arrow"></span></a>
<ul>
<li><a href="Pensijilan.php">Pensijilan Professional</a></li>
<li><a href="/responsive/Kursus.php">Kursus</a></li>
</ul>
</li>
<li><a href="Kriteria A1.php">Kriteria Kecemerlangan</a></li>
<li><a href="Status.php">Status Pengesahan Projek</a></li>
<li><a href="Salinan.php">Senarai Salinan Dokumen</a></li>
<li><a href="#">Maklumbalas/Aduan</a></li>
</ul>
</div>
</div>

<div class="col-8 col-m-9">
			<div class="toolbox">
            Profail kepakaran > Khidmat Perundingan
    </div>
    <div class="textarea">
    

    <div class="bb">Khidmat Perundingan</div>
      <div class="cc">
  Perkhidmatan yang melibatkan kajian melalui mensyuarat/bengkel serta mengkaji proses/laporan terhadap projek-projek ICT yang dilaksana atau yang bermasalah. Satu laporan akan dihasilkan yang memperaku dan mengemukakan cadangan penyelesaian terhadap projek yang dilaksanakan.</div>

<div class="databox">
 <table width="auto" border="1" align="center" cellpadding="2" cellspacing="1" class="table table-striped table-bordered table-hover table-condensed" >
<?php
if(isset($_SESSION['userid'])){
if(isset($_POST['update']))
{
    //retrieve the post variables
    extract($_POST);

    $sql ="UPDATE khidmatperundingan SET NamaPerundingan= '$NamaPerundingan', Kementerian = '$Kementerian', Jabatan = '$Jabatan', Bidang = '$Bidang', Peringkat = '$Peringkat', datepicker = '$datepicker', datepicker2 = '$datepicker2', DeskripsiDokumen = '$DeskripsiDokumen' WHERE KhidmatPerundinganid = $KhidmatPerundinganid";

	
	
	$result=$connect->query($sql);
    if($result)
    {
       header ("Location:KhidmatPerundingan.php"); 
    }
 else      
 {
     echo"<h1>ERROR performing queries.<h1>".mysqli_error($connect);
     die(); 
 }
  
}
else if(isset($_GET['a']))
{
 
     
    $Edit7 = $_GET['a'];
    $KhidmatPerundinganid = $_GET['i'];
    
    //if a == 1 EDIT
    if($Edit3 = 2)
    {

        $sql = "SELECT * FROM khidmatperundingan WHERE KhidmatPerundinganid = '$KhidmatPerundinganid'";
                if($result = mysqli_query($connect, $sql))
        {
            if(mysqli_num_rows($result)>0)//check if there is a result
            {
                $row = mysqli_fetch_assoc($result);
						
$KhidmatPerundinganid  = $row['KhidmatPerundinganid'];
$NamaPerundingan = $row['NamaPerundingan'];
$Kementerian= $row['Kementerian'];
$Jabatan= $row['Jabatan'];
$Bidang=$row['Bidang'];
$Peringkat= $row['Peringkat'];
$datepicker= $row['datepicker'];
$datepicker2= $row['datepicker2'];
$DeskripsiDokumen= $row['DeskripsiDokumen'];

                echo'<form method = "POST" action="/responsive/Edit7.php"">';
                echo"<strong>Kemaskini Maklumat</strong>";
                echo'<table align ="center" border="2">';
				
				echo"<tr><td>ID</td><td><input type='text' name ='KhidmatPerundinganid' size = '10' maxlength = '10' value = '$KhidmatPerundinganid' readonly></td></tr>";
  ?>              
      <tr>
        <td width="208">Nama Perundingan :</td>
        <td width="285"><span id="sprytextfield2">
          <label for="NamaPerundingan"></label>
          <input name="NamaPerundingan" type="text" class="StyleTxtField1" id="NamaPerundingan" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td>Kementerian :</td>
        <td><span id="sprytextfield1" span class="textfieldRequiredMsg">Please insert data.</span></span>
           <label for="Kementerian"></label>
          <input name="Kementerian" type="text" class="StyleTxtField1" id="Kementerian" />      
        </tr>
      <tr>
        <td>Jabatan :</td>
        <td><span id="sprytextfield3">
          <label for="Jabatan"></label>
          <input name="Jabatan" type="text" class="StyleTxtField1" id="Jabatan" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td> Bidang :</td>
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
        <td>Peringkat :</td>
        <td><span id="sprytextfield5">
          <label for="Peringkat"></label>
          <input name="Peringkat" type="text" class="StyleTxtField1" id="Peringkat" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td>Tarikh Mula :</td>
        <td><span id="sprytextfield6">
          <label for="datepicker"></label>
          <input name="datepicker" type="text" class="StyleTxtField1" id="datepicker" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td>Tarikh Tamat :</td>
        <td><span id="sprytextfield7">
          <label for="datepicker2"></label>
          <input name="datepicker2" type="text" class="StyleTxtField1" id="datepicker2" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td>Deskripsi Dokumen :</td>
        <td><span id="sprytextfield8">
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
</td>

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
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
</script>
</body>
</html>
