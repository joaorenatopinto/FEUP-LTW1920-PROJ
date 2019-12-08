<?php 
    include_once('database/connection.php');
    include_once('database/db_users.php');
    include_once('database/db_reservations.php');
    include_once('database/db_properties.php');
    include_once('templates/tlp_common.php');
    include_once('templates/tlp_profile.php');
    session_start();

    if(isset($_SESSION['username'])) {
        draw_header();
        draw_navbar();
        $user = get_user($_SESSION['username']);
        draw_profile_card($user);
        $properties = get_user_properties($user);
        $reservations = get_user_reservations($user);
        $reservations_properties = [];
        foreach($reservations as $reservation) {
            $property = get_property_by_id($reservation['property_id']);
            $reservations_properties[] = $property;
        }
        //print_r($reservations_properties);
        draw_profile_ui($reservations, $reservations_properties, $properties);
    }
    else {
        header('Location: login.php');
    }
?>