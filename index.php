
<?php require "connect.php" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; bcharset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<style type="text/css">
.container .row .col-8.col-m-9 form .textarea p {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000;
}
.loginbackground .row.aa p {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	text-align: center;

}
</style>
<link rel="icon" type="image/png" sizes="192x192" href="/responsive/images/LogobaruJPKN.jpg">
<link href="/responsive/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="/responsive/SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="/responsive/layout.css" rel="stylesheet" type="text/css" />
<link href="/responsive/menu.css" rel="stylesheet" type="text/css" />

<script src="/responsive/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="/responsive/SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
</head>
<body>

<div class="header">
  <div class="logo"></div>
  
</div>
<div class="loginbackground">
  <div class="row aa">
		<h2> Login</h2>
		<form id="form2" name="form2" method="post" action="loginpro.php"><table width="339" border="0" cellspacing="1" cellpadding="2">
		  <tr>
		    <td width="125">username:</td>
		    <td width="232">
		      <label for="username"></label>
		      <span id="sprytextfield2">
		      <label for="username"></label>
		      <input name="username" type="text"
              placeholder="Ex: 950117124444" class="StyleTxtField" id="username" />
		      <span class="textfieldRequiredMsg">A value is required.</span></span>
              
		    </td>
	      </tr>
		  <tr>
		    <td>password:</td>
		    <td>
		      <span id="sprypassword1">
		        <label for="password"></label>
		        <input name="password" type="password"  placeholder="Ex: pijoo123" class="StyleTxtField" id="password" />
		        <span class="passwordRequiredMsg">A value is required.</span></span>
           
	        </td>
	      </tr>
		  <tr>
		    <td height="63">
		      <input name="login" type="submit" class="StyleTxtField2" id="login" value="Log-In" />
		  </td>
		    <td>&nbsp;</td>
	      </tr>
    </table>
    </form>
		
		<p>Please insert IC Number as Username and your Password to login.</p>
        
        <p>Forgotten password?   
<div class="q"><a href="https://egjpkn.sabah.gov.my/TellPasswdSSO.asp" target="_blank" style="text-decoration:underline" > forgot password</a> </p></div>
		 
		   
        <p>&nbsp; </p>
 </div> 
</div>
  <div class="p33">Dibangunkan oleh: Hafizah binti Hassan</div>


  
<div class="footer">
  Notis Penafian ( Disclaimer Notice ) 
Jabatan Perkhidmatan Komputer Negeri Sabah tidak akan bertanggungjawab ke atas sebarang 
kerosakkan atau kerugian yang dialami disebabkan penggunaan sebarang maklumat dari laman web ini. 

Hakcipta terpelihara © 2017 BLK - JPKN
</div>

<script type="text/javascript">

var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</body>
</html>
