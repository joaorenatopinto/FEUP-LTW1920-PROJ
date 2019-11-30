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
                          WHERE users.username = ?");
    $stmt->execute(array($username));
    $user = $stmt->fetch();
    return ($user !== false && password_verify($password, $user['password']));
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

    $options = ['cost' => 12];
    $hash_pass = password_hash($password, PASSWORD_DEFAULT, $options);

    $stmt = $db->prepare("INSERT INTO users VALUES(?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute(array($username, $hash_pass, $name, null, null, null, date('Y-m-d')));
  }

?>

<!-- H:i:s