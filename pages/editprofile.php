<?php
    include_once('../database/db_users.php');
    include_once('../templates/tlp_common.php');
    include_once('../templates/tlp_account.php');
    session_start();
    session_regenerate_id(true);

    if(isset($_SESSION['username']) && $_SESSION['username']!='') {
        $user = get_user($_SESSION['username']);
        draw_header();  
        draw_navbar();
        draw_edit($user);
    }
    else {
        header('location: main_page.php');
    }
?>