<?php
    include_once('database/db_properties.php');
    session_start();

    $user = $_SESSION['username'];
    print($user);
    $title = $_POST['title'];
    print($title);
    $description = $_POST['description'];
    print($description);
    $country = $_POST['country'];
    print($country);
    $location = $_POST['location'];
    print($location);
    $adress = $_POST['adress'];
    print($adress);
    $bathrooms = $_POST['bathrooms'];
    print($bathrooms);
    $bedrooms = $_POST['bedrooms'];
    print($bedrooms);
    $kitchens = $_POST['kitchens'];
    print($kitchens);
    $livingrooms = $_POST['livingrooms'];
    print($livingrooms);
    $type = $_POST['type'];
    print($type);
    $price = $_POST['price'];
    print($price);
    $area = $_POST['area'];
    print($area);
    $start = $_POST['startDate'];
    print($start);
    $end = $_POST['endDate'];
    print($end);
?>