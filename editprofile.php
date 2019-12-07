<?php
    include_once('database/db_users.php');
    include_once('templates/tlp_common.php');
    include_once('templates/tlp_account.php');
    $user = get_user($_GET['username']);
    draw_edit_header();
    draw_navbar();
    draw_header();  
    draw_edit($user);
?>