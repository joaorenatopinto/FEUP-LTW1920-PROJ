<?php
    include_once('database/db_users.php');
    include_once('templates/tlp_common.php');
    include_once('templates/tlp_account.php');
    $user = get_user($_GET['username']);

    if($_SESSION['username']!=$_GET['username']) {
        header('location: main_page.php');
    }

    draw_edit_header();
    draw_navbar();
    draw_header();  
    draw_edit($user);
?>