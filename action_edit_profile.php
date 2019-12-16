<?php
    include_once('database/db_users.php');

    $username = preg_replace ("/[^a-zA-Z\s]/", '', $_POST['username']);

    $name = preg_replace ("/[^a-zA-Z\s]/", '',  $_POST['name']);
    $email = preg_replace ("/[^a-zA-Z\s]/", '', $_POST['email']);
    $country = preg_replace ("/[^a-zA-Z\s]/", '', $_POST['country']);
    $bio = htmlentities(trim($_POST['bio']), ENT_NOQUOTES);
    
    update_user_details($username, $name, $email, $country, $bio);

    $password = htmlentities($_POST['password']);
    $confirm_pw = htmlentities($_POST['confirm-password']);
    if(isset($password) && $password!="" && $password==$confirm_pw) {
        update_user_password($username, $password);
    }

    if(isset($_FILES['image']['tmp_name']) && $_FILES['image']['tmp_name']!="") {
        imagepng(imagecreatefromstring(file_get_contents($_FILES['image']['tmp_name'])), "images/users/$username.png");
    }

    header("Location: main_page.php");    
?>  