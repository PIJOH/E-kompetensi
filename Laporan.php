 <?php require_once "connect.php" ;
include("session.php"); 

?>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `user` WHERE CONCAT(`userid`, `FName`, `LName`, `ic`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `user`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    include  "connect.php";
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/responsive/layout.css" rel="stylesheet"/>
<link href="/responsive/templatecss.css" rel="stylesheet"/>
<link href="/responsive/w3.css" rel="stylesheet"/>

<link href="/responsive/templatecss.css" rel="stylesheet" />
<link href="/responsive/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="/responsive/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="/responsive/menu.css" rel="stylesheet"/><style type="text/css">
<style type="text/css">
.box1 .box7 table tr td {
	text-align: center;
}
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
             
              <li><a href="#"> Keluar</a></li>
              
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

<div class="col-8 col-m-9">		<div class="toolbox">
            Laporan Kepakaran Individu
            
          
            
    </div>
    
    <div class="toolbox2">

         <form action="Laporan.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Tulis sesuatu">
            <input type="submit" name="search" value="Carian">
                
     </form>
     </div>
    <div class="textarea"><div class="box5">Laporan
    </div>
   
  <div class="box6">
    <table width="auto" border="0" cellspacing="1" cellpadding="2">
      <tr>
        <td width="80"></td>
       
   
    </tr>
         
    </table>
  </div>

<table  width="auto" class="w3-table-all" cellspacing="1" cellpadding="2">

<thead>

  <tr class="w3-blue">
            
             <td width="auto">id</td>
  			  <td width="auto">Nama Pertama</td>
	    <td width="auto">Nama Akhir</td>
        <td width="auto">No Kad Pengenalan</td>
            <td width="auto">E-Kompetensi</td>
            <td width="auto">Kriteria Kecemerlangan</td>
             </tr>

      <!-- populate table from mysql database -->
                <?php 
				
				
				while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['userid'];?></td>
                    <td><?php echo $row['FName'];?></td>
                    <td><?php echo $row['LName'];?></td>
                    <td><?php echo $row['ic'];?></td>
                    <td><a href="/responsive/template.php?userid=<?php echo $row['userid'] ?>">E-Kompetensi</a></td>
           <td><a href="/responsive/TemplateKecemerlangan.php?userid=<?php echo $row['userid'] ?>">Kriteria Kecemerlangan</a></td>
        </tr>
        
                </tr>
                <?php endwhile;?>
            </table></thead>
        </form>
  </div>
  </div>
  </div>
  </div>
</body>
<div class="col-3 col-m-12">
 
</div>

</div>
	
  
<div class="footer">
  <p>Copyright @ JPKN 2017.</p>
</div>

</body>
