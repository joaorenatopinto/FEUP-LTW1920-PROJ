<?php
    include_once('../database/db_users.php');
    include_once('../templates/tlp_common.php');
    session_start();
    session_regenerate_id(true);

    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);

    if(check_password($username, $password)) {
        $_SESSION['username'] = $username;
        header('Location: ../pages/main_page.php');
    }
    else {
        header('Location: ../pages/login.php');
    }
?>