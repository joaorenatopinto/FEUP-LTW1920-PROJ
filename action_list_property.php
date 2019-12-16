<?php
    include_once('database/db_properties.php');
    session_start();
    
    $user = $_SESSION['username'];
    $title = htmlentities(trim($_POST['title']), ENT_NOQUOTES);    //only letters
    $description = htmlentities(trim($_POST['description']), ENT_NOQUOTES);   //allow links
    $country = $_POST['country'];
    $location = preg_replace ("/[^a-zA-Z\s]/", '', $_POST['location']);    // letters only
    $adress = preg_replace ("/[^a-zA-Z0-9\s]/", '', $_POST['adress']); //numbers and letters only
    $bathrooms = $_POST['bathrooms'];
    $bedrooms = $_POST['bedrooms'];
    $kitchens = $_POST['kitchens'];
    $livingrooms = $_POST['livingrooms'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $area = $_POST['area'];
    $start = $_POST['startDate'];
    $end = $_POST['endDate'];

    print_r($_FILES);

    if(strtotime($start) < strtotime($end)) {
        $id = insert_property([$title, $user, $description, $country, $location, $adress, $bathrooms, $bedrooms, $kitchens, $livingrooms, $type, $price, $area, $start, $end]);
        imagepng(imagecreatefromstring(file_get_contents($_FILES['property_image']['tmp_name'])), "images/properties/$id.png");
        header('Location: main_page.php');
    }
    else header('Location: list_property.php');
?>