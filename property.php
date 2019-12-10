<?php
    //$property_id = $_GET['id'];
    //print($_GET['id']);

    include_once('templates/tlp_common.php');
    include_once('database/db_properties.php');
    include_once('database/db_reservations.php');
    include_once('templates/tlp_property.php');
    include_once('templates/tlp_reservation.php');
    include_once('templates/tlp_calendar.php');

    session_start();

    draw_header();
    draw_navbar();

    $property = get_property_by_id($_GET['id'])[0];
    draw_property($property);
    if(isset($_SESSION['username'])) {
        if($property['owner']==$_SESSION['username']) {
            $reservations = get_property_reservations($property['id']);
            draw_reservations_seperator();
            foreach($reservations as $reservation) {
                draw_reservation_card($reservation, $property);
            }
        }
        else {
            draw_reservation_ui($_GET['id']);
            draw_calendar();
        }
    }
    else {
        echo '<p> You need to be logged in to make a reservation. </p>';
    }
?>