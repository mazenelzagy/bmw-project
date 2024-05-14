<!DOCTYPE html>
<html>
<head>
	<title>THE INTERNATIONAL BMW WEBSITE</title>
	<link rel="stylesheet" type="text/css" href="loginstyle1.css">
</head>
<body>

     <form id="form" action="login.php" method="post">
     	<h2>THE INTERNATIONAL BMW WEBSITE</h2>

     	<label>email</label>
     	<input type="email" id=email name="uname" placeholder="email">
        <span style="color:deeppink;" class="Errormessage" id='nameError'></span>
		<br>
     	<label>password</label>
     	<input type="password" id=password name="password" placeholder="Password">
		 <span style="color:deeppink;" class="Errormessage" id='passError'></span>
		 <br>
		 <div>
        <a href="forgot_password.php">Forgot Password?</a>
    </div>
     	<button type="submit">Login</button>
     </form>
	 <form action="signupindex.php" method="post">
	 <h2>if you don't have account</h2>
    <input type="submit" name="sign up" value="signup" id="btn">
		 </form>
<script src="scriptlogin.js"></script>
</body>
</html>