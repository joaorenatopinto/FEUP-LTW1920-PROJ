<?php
    include('connection.php');

    function get_property_reservations($property_id) {
        global $db;
        $stmt = $db->prepare('SELECT reservations.*
                              FROM reservations
                              WHERE property_id = ?');
        $stmt->execute(array($property_id));
        return $stmt->fetchAll();
    }

    function get_user_reservations($user) {
        global $db;
        $stmt = $db->prepare('SELECT reservations.*
                              FROM reservations
                              WHERE client_id = ?');
        $stmt->execute(array($user['username']));
        return $stmt->fetchAll();
    }

    function insert_reservation($values) {
        global $db;
        $stmt = $db->prepare("INSERT INTO reservations (owner_id, client_id, property_id, start_date, end_date)
                              VALUES (?, ?, ?, ?, ?)");
        $stmt->execute($values);
        return $stmt->fetchAll();
    }
?>