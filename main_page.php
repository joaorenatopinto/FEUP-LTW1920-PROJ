<?php 
    include_once('templates/tlp_common.php');
    include_once('templates/tlp_property.php');
    include_once('database/property.php');
    draw_header();
    draw_navbar();
    draw_footer();

    $properties = getAllProperties();

    draw_property();
    /*draw_property();
    draw_property();
    draw_property();*/
?>



