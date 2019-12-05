<?php
    include_once('database/db_properties.php');
    include_once('database/db_reservations.php');
    session_start();
    $property = get_property_by_id($_POST['property_id']);
    $startDate = $_POST['reservation-start'];
    $endDate = $_POST['reservation-end'];
    $valid = 1;

    if(strtotime($startDate) > strtotime($endDate)) {
        header('Location: property.php?id=' . $_POST['property_id']);
    }

   // print_r(get_property_reservations($_POST['property_id']));

    // check if inside property availability period
    if(strtotime($startDate)>=strtotime($property[0]['startAvailablePeriod']) and strtotime($endDate)<=strtotime($property[0]['endAvailablePeriod'])) {
        $reservations = get_property_reservations($_POST['property_id']);
        //print('1');
        foreach($reservations as $reservation) {
            if(strtotime($endDate)<strtotime($reservation['start_date']) or strtotime($startDate)>strtotime($reservation['end_date'])) {
                continue;
            }
            else {
               // print('2');
                $valid=0; 
                break;
            }
        }
        if($valid) insert_reservation([$property['owner'], $_SESSION['username'], $_POST['property_id'], $startDate, $endDate]);
    }
    //else print('3');
?>