<?php
    include_once('database/db_users.php');
    session_start();
    session_regenerate_id(true);

    $username = htmlentities(strtolower($_POST['username']));
    $password = htmlentities($_POST['password']);
    $name = htmlentities($_POST['firstname']) . ' ' . htmlentities($_POST['lastname']);

    try {
        insert_user($username, $password, $name);
        $_SESSION['username'] = $username;
        print($_SESSION['username']);
        header('Location: profile.php');
    } catch(PDOException $e) {
        header('Location: signup.php');
    }
?>