<?php
    include_once('database/db_properties.php');
    $availability = get_property_by_id($_GET['id']);

    $myJSON = json_encode($availability);
    echo $myJSON;
 ?>