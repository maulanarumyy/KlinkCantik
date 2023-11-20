<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/login.css" media="all">
    <title>Login</title>
</head>
<body>
    <div class="kotak_login">
	    <p class="tulisan_login">Silahkan login</p>
    <form action="ceklogin.php" method="post">
		<label>Username</label>
		<input type="text" name="username" class="form_login" placeholder="Username">

		<label>Password</label>
		<input type="password" name="password" class="form_login" placeholder="Password">

        <input type="submit" class="tombol_login" value="LOGIN">
	</form>
</div>
</body>
</html>