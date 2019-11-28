<?php
    $location = $_GET['search_location'];
    $price = $_GET['search_price'];
    $bedrooms = $_GET['search_bedrooms'];

    include_once('templates/tlp_common.php');
    include_once('database/db_properties.php');
    include_once('templates/tlp_property.php');

    draw_header();
    draw_navbar();

    $search_result = search_properties($location, $price, $bedrooms);
    foreach($search_result as $result) {
        draw_property($result);
    }

    draw_footer();
?>