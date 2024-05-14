<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="welcome.css">
    <title>welcome page</title>
</head>
<body>
    
    <form id="form" action="home.html" method="post">
        <br>
        <div class="image-container">
            <img src="pngwing.com.png" width="200px" height="200px" alt="Photo 1">
        </div> 
        <h2>Welcome, <?php echo $_SESSION['name'];;?>
        </h2>

        <button id="btn" class="my-button">Home page</button>
        <script>
            var button = document.getElementById("btn");
            button.addEventListener("click", function() {
                window.location.href = "home.html";
                alert("press ok to view home page!!");
            });
        </script>
        <br>
        <br>
    </form>
</body>
</html>
<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>