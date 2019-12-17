<?php
    include_once('database/db_properties.php');
    include_once('database/db_reservations.php');

    if(isset($_GET['id'])){
        $id = htmlentities($_GET['id']);
        $reservations = get_property_reservations($id);
        foreach($reservations as $reservation){
            delete_reservation($reservation['id']);
        }
        //if(file_exists('images/properties/' . $property['id'] . '.png')) {
            unlink('images/properties/' . $property['id'] . '.png');
       // }
        delete_property($id);
    }
    header('Location: profile.php');
?>