<?php
  function getAllUsers() {
    global $db;
    $stmt = $db->prepare("SELECT *
                           FROM users");
    $stmt->execute();
    return $stmt->fetchAll();
  }
?>