<?php
session_start();
include "../connect/db.php";
try {
    $username = $_POST["username"];
    $password = $_POST["password"];
    // $username = "oli";
    // $password = "password";

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $query = $conn->query($sql);
    $rs = $query->fetch_assoc();

    $num_row = $query->num_rows;

    if ($num_row > 0) {
        $_SESSION['user_id'] = $rs['id'];
        $_SESSION['user_role'] = $rs['role_id'];
        $_SESSION['user_fname'] = $rs['firstname'];
        $_SESSION['user_lname'] = $rs['lastname'];
        echo '1';
    } else {
        echo '0';
    }
} catch (Exception $e) {
    echo $e;
}
