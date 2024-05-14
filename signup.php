<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['name'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    $name = validate($_POST['name']);

    $check_user = "SELECT * FROM users WHERE user_name=?";
    $stmt_check = $conn->prepare($check_user);
    $stmt_check->bind_param("s", $uname);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        echo "<script>alert('Username already exists'); window.location.href = 'signupindex.php';</script>";
        exit();
    } else {
        $insert_user = "INSERT INTO users (user_name, password, name) VALUES (?, ?, ?)";
        $stmt_insert = $conn->prepare($insert_user);
        $stmt_insert->bind_param("sss", $uname, $pass, $name);

        if ($stmt_insert->execute()) {
            $_SESSION['user_name'] = $uname;
            $_SESSION['name'] = $name;
            $_SESSION['id'] = $stmt_insert->insert_id;
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
            exit();
        }
    }
} else {
    header("Location: signupindex.php");
    exit();
}
?>