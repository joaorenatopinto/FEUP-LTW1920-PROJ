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

    if(strtotime($start) < strtotime($end)) {
            insert_property([$title, $user, $description, $country, $location, $adress, $bathrooms, $bedrooms, $kitchens, $livingrooms, $type, $price, $area, $start, $end]);
        header('Location: main_page.php');
    }
    else header('Location: list_property.php');
?>