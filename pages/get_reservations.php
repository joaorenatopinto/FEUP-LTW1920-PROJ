<?php
    include_once('../database/db_reservations.php');
    $reservations = get_property_reservations($_GET['id']);

    $myJSON = json_encode($reservations);
    echo $myJSON;
 ?>