<?php
    //$property_id = $_GET['id'];
    //print($_GET['id']);

    include_once('templates/tlp_common.php');
    include_once('database/db_properties.php');
    include_once('templates/tlp_property.php');

    draw_header();
    draw_navbar();

    $property = get_property_by_id($_GET['id'])[0];

    draw_property($property);
?>