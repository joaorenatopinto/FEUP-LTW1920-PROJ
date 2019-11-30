<?php
    include_once('database/db_users.php');
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['firstname'] . ' ' . $_POST['lastname'];

    try {
        insert_user($username, $password, $name);
        $_SESSION['username'] = $username;
        print($_SESSION['username']);
        header('Location: profile.php');
    } catch(PDOException $e) {
        header('Location: signup.php');
    }
?>