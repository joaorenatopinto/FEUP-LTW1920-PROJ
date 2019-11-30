<?php
    include_once('database/db_users.php');
    include_once('templates/tlp_common.php');
    session_start();
    //draw_header();
    print('1');
    session_start();
    print('2');

    $username = $_POST['username'];
    $password = $_POST['password'];
    print($username);
    print($password);
    print('3');


    if(check_password($username, $password)) {
        print('4');

        $_SESSION['username'] = $username;
        header('Location: main_page.php');
    }
    else {
        print('5');

        header('Location: login.php');
    }
?>