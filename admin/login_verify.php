<?php
include('./includes/connection.php');

if (isset($_POST['login_submit'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $stmt = "SELECT * FROM `admin_users` where email='" . $email . "'";
    $query = mysqli_query($conn, $stmt);
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
        $savedpassword = $row['password'];
        if ($password === $savedpassword) {

            $_SESSION['userid'] = $row['id'];
            $_SESSION['useremail'] = $row['email'];
            header('location: index');
        } else {
            header('location: login?err=2');
        }
    } else {
        header('location: login?err=1');
    }
}
