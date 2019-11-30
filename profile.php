<?php 
    include_once('database/connection.php');
    include_once('database/db_users.php');
    include_once('templates/tlp_common.php');
    include_once('templates/tlp_profile.php');
    session_start();

    if(isset($_SESSION['username'])) {
        draw_header();
        draw_navbar();
        $user = get_user($_SESSION['username']);
        draw_profile_card($user);
        $properties = get_user_properties($user);
        draw_profile_ui($properties);
    }
    else {
        header('Location: login.php');
    }
?>