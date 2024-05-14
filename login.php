<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {


	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	 }
 
	 $uname = validate($_POST['uname']);
	 $pass = validate($_POST['password']);
	if (!empty($uname) && !empty($pass)) {
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: welcome.php");
		    exit();
		} else {
			echo "<script>alert('Incorrect username or password');window.location.href='index.php';</script>";
	        exit();
		}
	} else {
		echo "<script>alert('Both username and password are required');window.location.href='index.php';</script>";
	    exit();
	}
	
} else {
	header("Location: index.php");
	exit();
}
?>