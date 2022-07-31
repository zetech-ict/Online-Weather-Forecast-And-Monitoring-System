<?php
session_start();
include('includes/connection.php');
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $password = md5(mysqli_real_escape_string($connection,$_POST['password']));

    $check_email = "SELECT * FROM users WHERE email='$email'";
    $check_email_r = mysqli_query($connection,$check_email)
    or die("Erron:".mysqli_error($connection));
    if (mysqli_num_rows($check_email_r) < 1) {
        header("Location:login.php?message = 'Invalid credentials. Please try again.'");
    }else{
        $verify = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $verify_r =mysqli_query($connection,$verify)
        or die("ERROR:".mysqli_error($connection));
        if (mysqli_num_rows($verify_r) !== 1) {
            header("Location:login.php?message='Invalid credentials. Please try again.'");
        }else{
            $user = mysqli_fetch_assoc($verify_r);

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['second_name'] = $user['second_name'];
            $_SESSION['phone'] = $user['phone'];

            header("Location:index.php");

        }
    }
}
?>