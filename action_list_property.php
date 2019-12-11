<?php
    include_once('database/db_properties.php');
    session_start();
    
    $user = $_SESSION['username'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $country = $_POST['country'];
    $location = $_POST['location'];
    $adress = $_POST['adress'];
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