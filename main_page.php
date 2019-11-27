<?php 
    include_once('database/connection.php');
    include_once('database/property.php');
    include_once('templates/tlp_common.php');
    include_once('templates/tlp_property.php');

    draw_header();
    draw_navbar();
    draw_footer();

    
    $properties = getAllProperties();

    draw_all_properties($properties);
?>



