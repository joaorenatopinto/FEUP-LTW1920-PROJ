<?php
  include('connection.php');

  function getAllUsers() {
    global $db;
    $stmt = $db->prepare("SELECT *
                           FROM users");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function get_user($username) {
    global $db;
    $stmt = $db->prepare("SELECT users.*
                          FROM users
                          WHERE users.username = ?");
    $stmt->execute(array($username));
    return $stmt->fetchAll()[0];
  }

  function check_password($username, $password) {
    global $db;
    $stmt = $db->prepare("SELECT users.*
                          FROM users
                          WHERE users.username = ? AND
                                users.password = ?");
    $stmt->execute(array($username, $password));
    return $stmt->fetchAll();
  }

  function get_user_properties($user) {
    global $db;
    $stmt = $db->prepare("SELECT property.*
                          FROM property
                          WHERE property.owner = ?");
    $stmt->execute(array($user['username']));
    return $stmt->fetchAll();
  }

  function insert_user($username, $password, $name) {
    global $db;
    $stmt = $db->prepare("INSERT INTO users VALUES(?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute(array($username, $password, $name, null, null, null, date('Y-m-d')));
  }

?>

<!-- H:i:s