<?php
    include_once('../database/db_users.php');
    session_start();
    session_regenerate_id(true);

    $username = htmlentities(strtolower($_POST['username']));
    $password = htmlentities($_POST['password']);
    $confirm_password = htmlentities($_POST['confirm_password']);
    print($confirm_password);
    $name = htmlentities($_POST['firstname']) . ' ' . htmlentities($_POST['lastname']);

    if($password == $confirm_password) {
        insert_user($username, $password, $name);
        $_SESSION['username'] = $username;
        print($_SESSION['username']);
        header('Location: ../pages/profile.php');
    } else {
        header('Location: ../pages/signup.php');
    }
?>