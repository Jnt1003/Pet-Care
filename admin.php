<?php
session_start();
if(isset($_POST["login"])) {
	
	include("conn.php");
	
	$sql = "SELECT * FROM adminlogin WHERE AdminName = '" . $_POST["AdminName"] . "' AND password = '" . $_POST["password"] . "'";
    
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
	if($row) {
			$_SESSION["AdminID"] = $row["AdminID"];
			if(isset($_POST["rememberuser"])) {
				setcookie ("user_login",$_POST["AdminName"],time() + (604800), "/"); 
			//604800 seconds = 7 days
			} else {
				unset($_COOKIE['user_login']); 
				setcookie('user_login', null, -1, '/');
			}
			
			echo "<script>window.location.href='test.php';</script>";
			
			
	} else {
		$message = "Invalid Login";
	}
}
?>
<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
body {
			font-family: 'Montserrat', sans-serif;
			background-image: url('pet-caring.jpg');
			background-size: cover;
			background-position: center;
		}
		
		.container {
			width: 300px;
			margin: 0 auto;
			margin-top: 100px;
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
		}
		.container h2 {
			text-align: center;
		}
		
		.field {
			margin-bottom: 10px;
		}
		
		.field label {
			font-weight: bold;
		}
		.field input[type="text"],
		.field input[type="password"] {
			width: 100%;
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 3px;
		}
		
		.field input[type="checkbox"] {
			margin-top: 5px;
			margin-right: 5px;
		}
		.field input[type="submit"] {
			width: 100%;
			padding: 10px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 3px;
			cursor: pointer;
		}
		
		.field input[type="submit"]:hover {
			background-color: #45a049;
		}
		h2 {
        background-image: linear-gradient(to right, #f7a7a7, #ff7f7f);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
		font-size: 32px;
    }
		

</style>

</head>
<body>
	<div class="container">
		<h2>MUTT-ICURE Admin page</h2>
		<h3>Login</h3>
		<form action="" method="post">
			<div class="field">
				<div><label for="login">Admin Name</label></div>
				<div><input name="AdminName" type="text" value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>"></div>
			</div>
			<div class="field">
				<div><label for="password">Password</label></div>
				<div><input name="password" type="password" value=""></div>
			</div>
			<div class="field">
				<div><input type="checkbox" name="remember" id="rememberuser" <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?> />
				<label for="remember-me">Remember me</label></div>
			</div>
			<div class="field">
				<div><input type="submit" name="login" value="Login"></div>
			</div>
			<div>
			<a href="login.php">Customer Login</a>
			</div>
		</form>
	</div>
</body>
</html>