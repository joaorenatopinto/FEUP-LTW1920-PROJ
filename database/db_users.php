<?php
  function getAllUsers() {
    global $db;
    $stmt = $db->prepare("SELECT *
                           FROM users");
    $stmt->execute();
    return $stmt->fetchAll();
  }
?>

<?php
  function get_user_properties($user) {
    global $db;
    $stmt = $db->prepare("SELECT property.*
                          FROM property
                          WHERE property.owner = ?");
    $stmt->execute(array($user['username']));
    return $stmt->fetchAll();
  }