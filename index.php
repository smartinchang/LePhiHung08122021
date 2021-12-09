<?php
	session_start();
	if (isset($_SESSION["login"]) == FALSE) {
		$_SESSION["login"] = 0;
		
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>My Class</title>
	</head>
	<body>
		<a href="login.html">Đăng nhập</a> | <a href="signup.html">Đăng ký</a>
		<?php
			echo $_SESSION["login"];
			if ($_SESSION["login"] == 1) {
				echo "Đã đăng nhập";
			} else {
				echo "<a href=\"login.html\">Đăng nhập</a> | <a href=\"signup.html\">Đăng ký</a>";
			}
		?>
	</body>
</html>


login.php
<?php
	session_start();
	$_SESSION["login"] = 1;
	header("location: index.php");
?>