<?php
    include_once('database/db_users.php');
    session_start();
    session_regenerate_id(true);

    if(isset($_SESSION['username'])){
    
        $username =  htmlentities($_POST['username']);

        $name = htmlentities($_POST['name']);
        $email = htmlentities($_POST['email']);
        $country = htmlentities($_POST['country']);
        $bio = htmlentities(trim($_POST['bio']));
        
        update_user_details($username, $name, $email, $country, $bio);

        $password = htmlentities($_POST['password']);
        $confirm_pw = htmlentities($_POST['confirm-password']);
        if(isset($password) && $password!="" && $password==$confirm_pw) {
            update_user_password($username, $password);
        }

        if(isset($_FILES['image']['tmp_name']) && $_FILES['image']['tmp_name']!="") {
            imagepng(imagecreatefromstring(file_get_contents($_FILES['image']['tmp_name'])), "images/users/$username.png");
        }
    }
    header("Location: main_page.php");    
?>  