<?php 
    include_once('../database/connection.php');
    include_once('../database/db_properties.php');
    include_once('../templates/tlp_common.php');
    include_once('../templates/tlp_property.php');
    include_once('../templates/tlp_search.php');

    draw_header();
    draw_navbar();

    draw_search_interface();

    $properties = getAllProperties();
    draw_all_properties($properties);
    
    //draw_footer();
?>



