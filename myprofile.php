<?php 
    include_once('database/connection.php');
    include_once('database/user.php');
    include_once('templates/tlp_common.php');
    include_once('templates/tlp_profile.php');
    draw_header();
    draw_navbar();

    $users = getAllUsers();

    draw_profile_card($users[0]);

    draw_profile_ui();
?>