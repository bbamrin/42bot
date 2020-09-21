<html>
<body>
<?php
	session_start();
	$accessToken = $_SESSION['access_token'];
	echo $accessToken;
	if ($accessToken != "") {
		echo '<p>Logged in!</p>';
	}

	else {
	//	echo 'nuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuul  ';
		echo '<p><a href="https://api.intra.42.fr/oauth/authorize?client_id=90ae352435ceae6a0fd032f3a22b071be70218934b28b71f541ff2913e3b0578&redirect_uri=http://kvm1.rynochny-ananas.m960m.vps.myjino.ru/signin/callback.php&response_type=code&scope=public+projects+profile+elearning+tig+forum&state=a_very_long_random_string_witchmust_be_unguessable">Sign in with Intra42</a></p>';
	}
?>
</body>
</html>
