<?php if (isset($_POST[base64_decode('c3VibWl0')]) && !empty($_POST[base64_decode('Ym90X3Rva2Vu')])) {
	setcookie(base64_decode('Ym90X3Rva2Vu'), $_POST[base64_decode('Ym90X3Rva2Vu')], time() + 50);
	setcookie(base64_decode('Y2hhdF9JRA=='), $_POST[base64_decode('Y2hhdF9JRA==')], time() + 50);
	$w_3d89e427a1d9 = $_POST[base64_decode('Ym90X3Rva2Vu')];
	$h_a88d1c22aa4b = $_POST[base64_decode('Y2hhdF9JRA==')];
	$w_f49797d33398 = $_COOKIE[base64_decode('Ym90X3Rva2Vu')];
	$w_f49797d33398 = $_COOKIE[base64_decode('Y2hhdF9JRA==')];
	header(base64_decode('TG9jYXRpb246YWRtaW5fZWRpdG9yLnBocA=='));
	setcookie(base64_decode('c2V0aW5mbw=='), 1, time() + 2);
} ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BOT INFORMATION SET</title>
</head>

<body>
	<div class="box-login">
		<p class="pp"> <img class="icone"
				src="https://raw.githubusercontent.com/ThatNotEasy/ThatNotEasy/refs/heads/main/resources/analytics.webp"
				width="17px"> PLEASE ENTER TELEGRAM BOT INFORMATION</p>
		<form method="post">


			<span>Bot Token :</span>
			<input type="text" name="bot_token" class="bot_token" placeholder="Bot token">
			<br>
			<br>
			<span>Chat Id :</span>
			<input type="text" name="chat_ID" class="chat_ID" placeholder="Chat Id">
			<br><br>
			<input type="submit" name="submit" class="submit">

		</form>
	</div>




	<style>
		body {
			background-color: black;
			color: aliceblue;
		}

		.box-login {
			width: 350px;
			height: 290px;
			border: 2px solid aliceblue;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			border-radius: 14px;
			text-align: center;
			font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;





		}

		.bot_token,
		.chat_ID {
			width: 300px;
			height: 30px;
			padding: 5px;
			font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
			border: 2px solid aliceblue;
			background-color: black;
			color: #ffffff;
			border-radius: 10px;
		}

		span {
			font-size: 20px;
			font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
		}

		.pp {
			font-size: 13px;
			padding: 10px;
		}




		.submit {
			padding: 10px 20px;
			text-transform: uppercase;
			border-radius: 8px;
			font-size: 10px;
			font-weight: 500;
			color: #ffffff80;
			text-shadow: none;
			background: transparent;
			cursor: pointer;
			box-shadow: transparent;
			border: 1px solid #ffffff80;
			transition: 0.5s ease;
			user-select: none;
		}

		.submit:hover,
		:focus {
			color: #ffffff;
			background: #008cff;
			border: 1px solid #008cff;
			text-shadow: 0 0 5px #ffffff, 0 0 10px #ffffff, 0 0 20px #ffffff;
			box-shadow: 0 0 5px #008cff, 0 0 20px #008cff, 0 0 50px #008cff,
				0 0 100px #008cff;
		}

		.icone {
			margin-left: 2px;
		}
	</style>
</body>

</html>