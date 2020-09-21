<?php
	$code = $_GET['code'];
	$CLIENT_ID = "90ae352435ceae6a0fd032f3a22b071be70218934b28b71f541ff2913e3b0578";
	$CLIENT_SECRET = "0ac2b2446127b9960d6b046487cb908307d928a8252955ee4b326ce327516e18";
	$URL = "https://api.intra.42.fr/oauth/token";
	$GRANT_TYPE = "authorization_code";
	$postParams = ['client_id' => $CLIENT_ID, 'client_secret' => $CLIENT_SECRET, 'code' => $code, 'grant_type' => $GRANT_TYPE, 'state' => "a_very_long_random_string_witchmust_be_unguessable", 'redirect_uri' => "http://kvm1.rynochny-ananas.m960m.vps.myjino.ru/signin/callback.php"];
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $URL);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postParams);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$responce = curl_exec($ch);
	curl_close($ch);
	$data = json_decode($responce, true);
	if ($data['access_token'] != ""){
		session_start();
		$_SESSION['access_token'] = $data['access_token'];
		header('Location: http://kvm1.rynochny-ananas.m960m.vps.myjino.ru/test.php');
		exit;
	}
?>
