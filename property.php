<?php
    include_once('templates/tlp_common.php');
    include_once('database/db_properties.php');
    include_once('database/db_reservations.php');
    include_once('database/db_users.php');
    include_once('templates/tlp_property.php');
    include_once('templates/tlp_reservation.php');
    include_once('templates/tlp_profile.php');

    session_start();
    session_regenerate_id(true);

    draw_header();
    draw_navbar();
    $property = get_property_by_id(htmlentities($_GET['id']))[0];
    draw_property($property);    

    if(isset($_SESSION['username']) && $property['owner']==$_SESSION['username']) {
        if($property['owner']==$_SESSION['username']) {
            $reservations = get_property_reservations($property['id']);
            draw_reservations_seperator();
            foreach($reservations as $reservation) {
                //draw_reservation_card($reservation, $property);
                draw_reservation_card2($reservation, $property);
            }
        }
    }
    else {
        $owner = get_user($property['owner']);
        draw_reservation_ui($_GET['id'], $owner);
    }
?>