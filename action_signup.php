<?php
    include_once('database/db_users.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['firstname'] . ' ' . $_POST['lastname'];

    try {
        insert_user($username, $password, $name);
        //$_SESSION['username'] = $username;
        header('Location: main_page.php');
    } catch(PDOException $e) {
        header('Location: signup.php');
    }
?>