<?php
    include_once('database/db_properties.php');
    session_start();
    
    $user = $_SESSION['username'];
    $title = htmlentities(trim($_POST['title']), ENT_NOQUOTES);    //only letters
    $description = htmlentities(trim($_POST['description']), ENT_NOQUOTES);   //allow links
    $country = htmlentities($_POST['country']);
    $location = preg_replace ("/[^a-zA-Z\s]/", '', $_POST['location']);    // letters only
    $adress = preg_replace ("/[^a-zA-Z0-9\s]/", '', $_POST['adress']); //numbers and letters only
    $bathrooms = htmlentities($_POST['bathrooms']);
    $bedrooms = htmlentities($_POST['bedrooms']);
    $kitchens = htmlentities($_POST['kitchens']);
    $livingrooms = htmlentities($_POST['livingrooms']);
    $type = htmlentities($_POST['type']);
    $price = htmlentities($_POST['price']);
    $area = htmlentities($_POST['area']);
    $start = htmlentities($_POST['startDate']);
    $end = htmlentities($_POST['endDate']);

    print_r($_FILES);

    if(strtotime($start) < strtotime($end)) {
        $id = insert_property([$title, $user, $description, $country, $location, $adress, $bathrooms, $bedrooms, $kitchens, $livingrooms, $type, $price, $area, $start, $end]);
        imagepng(imagecreatefromstring(file_get_contents($_FILES['property_image']['tmp_name'])), "images/properties/$id.png");
        header('Location: main_page.php');
    }
    else header('Location: list_property.php');
?>