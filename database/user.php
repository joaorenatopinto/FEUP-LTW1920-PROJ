<?php
  function getAllUsers() {
    global $db;
    $stmt = $db->prepare("SELECT *
                           FROM property
                           ORDER BY id DESC");
    $stmt->execute();
    return $stmt->fetchAll();
  }
?>