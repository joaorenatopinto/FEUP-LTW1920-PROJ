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
    if(isset($password) && $password!="" && $password==$confirm_pw) {
        update_user_password($username, $password);
    }

    if(isset($_FILES['image']['tmp_name']) && $_FILES['image']['tmp_name']!="") {
        imagepng(imagecreatefromstring(file_get_contents($_FILES['image']['tmp_name'])), "images/users/$username.png");
    }

    header("Location: main_page.php");    
?>