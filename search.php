<?php
    $location = $_GET['search-location'];
    $price = $_GET['search-price'];
    $bedrooms = $_GET['search-bedrooms'];
    $bathrooms = $_GET['search-bathrooms'];
    $start_date = $_GET['search-date-start'];
    $end_date = $_GET['search-date-end'];
    $type = $_GET['search-type'];

    include_once('templates/tlp_common.php');
    include_once('database/db_properties.php');
    include_once('templates/tlp_property.php');

    draw_header();
    draw_navbar();

    $search_result = search_properties($location, $price, $bedrooms, $bathrooms, $start_date, $end_date);
    foreach($search_result as $result) {
        draw_property($result);
    }

    //draw_footer();
?>