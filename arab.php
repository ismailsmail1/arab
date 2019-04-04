<?php
function asw($a, $user) {
                $no = rand(1,10);
                $body = 'data={"clientId":"1","accountId":"9945","accessToken":"ce5f949368a3b06a43bad24e601f4949","user":"masboot","name":"5","value":"Admob Video Credit","dev_name":"Redmi Note 5","dev_man":"Xiaomi","ver":"2.0","pckg":"com.cash.dotcom"}&'.$no.'&';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://primary.best-priz.com:80/api/v2/account.Reward.php?");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 10);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		$headers = array ();
			$headers[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
			$headers[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 8.1.0; Redmi Note 5 MIUI/V10.2.2.0.OEIMIXM)";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;	}
echo "JUMLAH   : ";
$jum = trim(fgets(STDIN));
echo "========================================
=    © BOT APLIKASI ARAB YA BEBEB©     =
=      © CREATOR : BABANG BOOT ©       =
=          ©YT : TEAM TUYULERS ©       =
= [OJO LALI DI SUBSCRIBE YA BEBEB]     =
======================================== ".$user."\n";
for($a=0;$a<$jum;$a++){
sleep (15);
$oce = asw($a, $user);
echo "".$oce."\n";
}
?>
