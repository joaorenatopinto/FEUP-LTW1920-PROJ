<?php
    $location = preg_replace ("/[^<a-zA-Z0-9></a-zA-Z0-9>\s]/", '', $_GET['search-location']);
    $price = htmlentities($_GET['search-price']);
    $bedrooms = htmlentities($_GET['search-bedrooms']);
    $bathrooms = htmlentities($_GET['search-bathrooms']);
    $start_date = htmlentities($_GET['search-date-start']);
    $end_date = htmlentities($_GET['search-date-end']);
    $type = htmlentities($_GET['search-type']);
    $order = htmlentities($_GET['order']);

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