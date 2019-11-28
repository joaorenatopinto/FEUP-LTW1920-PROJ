<?php 
    include_once('database/connection.php');
    include_once('database/db_users.php');
    include_once('templates/tlp_common.php');
    include_once('templates/tlp_profile.php');
    draw_header();
    draw_navbar();

    $users = getAllUsers();

    draw_profile_card($users[0]);

    $properties = get_user_properties($users[0]);

    draw_profile_ui($properties);
?>