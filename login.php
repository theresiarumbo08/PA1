<?php
if (isset($_GET['login'])) {
	if($_GET['login'] == 'false'){
		?>
		<script>
			alert('Username atau password anda tidak sesuai!');
		</script>
		<?php
	}	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title> PA 1</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8" />


	<script type="text/javascript" src="./assets/js/jquery.js"></script>
	<script type="text/javascript" src="./assets/js/jquery.query-2.1.7.js"></script>
	<script type="text/javascript" src="./assets/js/rainbows.js"></script>

	<link type="text/css" rel="stylesheet" href="assets/css/style2.css" media="screen" />

	
	
</head>
<body>

	<div id="wrapper">
		<center><img src="DEL.jpg" width="200"></center><br><br>
		<p align="center" style="font-size: 15px; font-weight: bold;">Communication And Information</p>

	

		<div id="wrappertop"></div>
		<div id="wrappermiddle">
			<h2>Login</h2>
			<form method="POST" action="cek_login.php">
			<div id="username_input">

				<div id="username_inputleft"></div>

				<div id="username_inputmiddle">
					<input type="text" name="username" id="url" value="Username" onclick="this.value = ''" required="required" >
					<img id="url_user" src="./assets/images/mailicon.png" alt="">
				
				</div>

				<div id="username_inputright"></div>

			</div>

			<div id="password_input">

				<div id="password_inputleft"></div>

				<div id="password_inputmiddle">
					<input type="password" name="password" id="url" value="Password" onclick="this.value = ''" required="required">
					<img id="url_password" src="./assets/images/passicon.png" alt="">
				</div>

				<div id="password_inputright"></div><br>

			</div>
			<br>
			<div id="submit">
				<input type="image" src="./assets/images/submit_hover.png" id="submit1" value="Sign In">
				<input type="image" src="./assets/images/submit.png" id="submit2" value="Sign In">
			</div>
			</form>

			<div id="links_left"></div>
			<div id="links_right"></div>

		</div>

		<div id="wrapperbottom"></div>
		
		<div id="powered">
		<p>Copyright &copy; <?php echo date('Y'); ?> PA I</p>
		</div>
	</div>

</body>
</html>