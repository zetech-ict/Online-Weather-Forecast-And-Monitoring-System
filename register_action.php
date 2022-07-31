<?php
session_start();
include('includes/connection.php');
if (isset($_POST['register'])) {

    $first_name = trim(mysqli_real_escape_string($connection,$_POST['first_name']));
    $last_name = trim(mysqli_real_escape_string($connection,$_POST['last_name']));
    $phone = trim(mysqli_real_escape_string($connection,$_POST['phone']));
    $email = trim(mysqli_real_escape_string($connection,$_POST['email']));
    $password1 = trim(mysqli_real_escape_string($connection,$_POST['password1']));
    $password2 = trim(mysqli_real_escape_string($connection,$_POST['password2']));


    if ($password1 !== $password2){
        header("Location:register.php?message='Your passwords do not match'");
    }

    $encryptedPass = md5(mysqli_real_escape_string($connection,$_POST['password1']));

    $check_email = "SELECT * FROM users WHERE email='$email' OR phone='$phone'";
    $check_email_r = mysqli_query($connection,$check_email)
    or die("Erron:".mysqli_error($connection));
    if (mysqli_num_rows($check_email_r) > 0) {
        header("Location:login.php?message='Your email or phone number is already registered'");
    }else{
        $create = "INSERT INTO users(first_name,last_name,phone,email,password) 
                VALUES('$first_name','$last_name','$phone','$email','$encryptedPass')";
        $create_r = mysqli_query($connection,$create)
        or die(mysqli_error($connection)."Could not create an account. Please try again");
        if (!$create_r){
            header("Location:login.php?message='You have successfully registered. Please login to continue'");
        }

        header("Location:register.php?message='An unexpected error occurred. Please try again'");
    }
}
?>