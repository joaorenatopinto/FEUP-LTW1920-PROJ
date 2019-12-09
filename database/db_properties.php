<?php
  include('connection.php');

  function getAllProperties() {
    global $db;
    $stmt = $db->prepare("SELECT *
                           FROM property
                           ORDER BY id DESC;");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function search_properties($location, $price, $bedrooms, $bathrooms, $start_date, $end_date, $type) {
    global $db;

    $query = "SELECT *
              FROM property
              WHERE property.location LIKE ? AND
                    property.price BETWEEN ? AND ?";

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

    switch($bedrooms) {
      case 0:
        $query .= " AND property.nbedrooms >= 0;";
        break;
      case 1:
        $query .= " AND property.nbedrooms = 1;";
        break;
      case 2:
        $query .= " AND property.nbedrooms = 2;";
        break;
      case 3:
        $query .= " AND property.nbedrooms = 3;";
        break;
      case 4:
        $query .= " AND property.nbedrooms = 4;";
        break;
      case 5:
        $query .= " AND property.nbedrooms >= 5;";
        break;
    }

    switch($bathrooms) {
      case 0:
        $query .= " AND property.nathrooms >= 0;";
        break;
      case 1:
        $query .= " AND property.nbathrooms = 1;";
        break;
      case 2:
        $query .= " AND property.nbathrooms = 2;";
        break;
      case 3:
        $query .= " AND property.nbathrooms >= 3;";
        break;
    }

    if(isset($start_date)) {
      print($start_date);
      $query .= " AND property.startAvailablePeriod < " . $start_date;
    }

    if(isset($end_date)) {
      print($end_date);
      $query .= " AND property.endAvailablePeriod > " . $end_date;
    }

    if($type != 'any') {
      $query .= "AND property.type = " . $type;
    }

    if('2020-01-01' < '2020-05-01') print('aiwdaodin');
    else print('apidwnawpd');

    //print($query);
    $stmt = $db->prepare($query);
    $stmt->execute(array($location, $min, $max));
    return $stmt->fetchAll();
  }

  function get_property_by_id($id) {
    global $db;
    $stmt = $db->prepare("SELECT *
                          FROM property
                          WHERE property.id = ?;");
    $stmt->execute(array($id));
    return $stmt->fetchAll();
  }

  function insert_property($values) {
    global $db;
    $stmt = $db->prepare("INSERT INTO property (title, owner, description, country, location, adress, nbathrooms, nbedrooms, nkitchens, nlivingrooms, type, price, area, startAvailablePeriod, endAvailablePeriod)
                          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute($values);
    return $stmt->fetchAll(); //pode se retirar linha (?)
  }

?>
