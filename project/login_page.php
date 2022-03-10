<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Login_page</title>
	<link href="login_page.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="login-inserter">
		<form action="login_details.php" method="post">
		  
			<div class="container">
			  <label for="user_name"><b>Username</b></label>
			  <input type="text" placeholder="Enter Username" name="user_name" required>
		  
			  <label for="psw"><b>Password</b></label>
			  <input type="password" placeholder="Enter Password" name="psw" required>
		  
			  <button type="submit">Login</button>
			  <label>
				<input type="checkbox" checked="checked" name="remember"> Remember me
			  </label>
			</div>
		  
			<div class="container" style="background-color:#f1f1f1">
			  <button type="button" class="cancelbtn">Cancel</button>
			  <span class="psw">Forgot <a href="#">password?</a></span>
			</div>
		  </form>
	</div>
	<div class="redirect">
		<a href="sign_up_page.php">
			Signup Here
		</a>
	</div>
	<script>
		
	</script>

</body>

</html>