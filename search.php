<?php
    $location = preg_replace ("/[^a-zA-Z\s]/", '', $_GET['search-location']);
    $price = $_GET['search-price'];
    $bedrooms = $_GET['search-bedrooms'];
    $bathrooms = $_GET['search-bathrooms'];
    $start_date = $_GET['search-date-start'];
    $end_date = $_GET['search-date-end'];
    $type = $_GET['search-type'];
    $order = $_GET['order'];

    include_once('templates/tlp_common.php');
    include_once('database/db_properties.php');
    include_once('templates/tlp_property.php');
    include_once('templates/tlp_search.php');
    

    draw_header();
    draw_navbar();

    draw_search_interface();

    $search_result = search_properties($location, $price, $bedrooms, $bathrooms, $start_date, $end_date, $type, $order);
    foreach($search_result as $result) {
        draw_property($result);
    }

?>