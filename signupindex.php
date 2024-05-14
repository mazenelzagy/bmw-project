<!DOCTYPE html>
<html>
<head>
    <title>THE INTERNATIONAL BMW WEBSITE</title>
    <link rel="stylesheet" type="text/css" href="signupstylee.css">
</head>
<body>
    <form id='form' action="signup.php" method="post">
        <h2>THE INTERNATIONAL BMW WEBSITE</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>email</label>
        <input type="email" name="uname" placeholder="Enter email" id='email'>
        <span style="color:deeppink;" class="Errormessage" id='emailError'></span>
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter Password" id='password'>
        <span style="color:deeppink;" class="Errormessage" id='passError'></span>
        <br>
        <label>Confirm Password</label>
        <input type="confpassword" name="password" placeholder="Confirm Password" id='confpassword'>
        <span style="color:deeppink;" class="Errormessage" id='confpassError'></span>
        <br>
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter Your Name" id='name1'>
        <span style="color:deeppink;" class="Errormessage" id='nameError'></span>
        <br>
        <button type="submit">Sign Up</button>
    </form>
    
    <form action="login.php" method="post">
        <h2>Already have an account? Login here</h2>
        <input type="submit" name="login" value="Login" id="btn">
    </form>
    <script src="scriptsignup.js"></script>
</body>
</html>