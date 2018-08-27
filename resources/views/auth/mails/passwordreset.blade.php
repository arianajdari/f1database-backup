<!DOCTYPE html>
<html>
<head>

	<!-- Title -->
	<title>Password Reset E-mail</title>

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>
	<div>
		<img width="100%" src="https://image.ibb.co/iLMwgd/f1_email_image.png" alt="f1_email_image" border="0">
		<h3 style="font-family:'Raleway', sans-serif;padding:10px;font-weight: 600;">Dear {{ $name }}</h3> <br><br>
		<p style="font-family:'Raleway', sans-serif;padding:10px;font-weight: 600;">You have request a password reset on behalf of f1database</p> <br>
		<p style="font-family:'Raleway', sans-serif;padding:10px;font-weight: 600;">If you want to reset your password, please use the link provided down below:</p><br>
		<a style="font-family:'Raleway', sans-serif;padding:10px; font-weight: 600;" href="{{ env('APP_URL') }}reset/{{ $token }}">Reset Your Password</a>
	</div>
</body>
</html>