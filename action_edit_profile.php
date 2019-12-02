<?php
    include_once('database/db_users.php');

    $username = $_POST['username'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $bio = $_POST['bio'];
    update_user_details($username, $name, $email, $country, $bio);

    $password = $_POST['password'];
    $confirm_pw = $_POST['confirm-password'];
    if(isset($password) and $password==$confirm_pw) {
        update_user_password($username, $password);
    }

    header("Location: main_page.php");

    
?>