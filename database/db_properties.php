<?php
  include('connection.php');

  function getAllProperties() {
    global $db;
    $stmt = $db->prepare("SELECT *
                           FROM property
                           ORDER BY id DESC");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function search_properties($location, $price) {
    global $db;

    switch($price) {
      case 0:
        $min = 0;
        $max = 10000;
        break;
      case 1:
        $min = 0;
        $max = 100;
        break;
      case 2:
        $min = 100;
        $max = 200;
        break;
      case 3:
        $min = 200;
        $max = 300;
        break;
      case 4:
        $min = 300;
        $max = 500;
        break;
      case 5:
        $min = 500;
        $max = 10000;
        break;
    }

    if($location=='') {
      $location = '%';
    }

    $stmt = $db->prepare("SELECT *
                          FROM property
                          WHERE property.location LIKE ? AND
                                property.price BETWEEN ? AND ?;");
    $stmt->execute(array($location, $min, $max));
    return $stmt->fetchAll();
  }
