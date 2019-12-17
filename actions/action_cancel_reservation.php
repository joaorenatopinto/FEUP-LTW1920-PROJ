<?php
    include_once('../database/db_reservations.php');

    if(isset($_GET['id'])){
        $id = htmlentities($_GET['id']);
        delete_reservation($id);
    }
    header('Location: ../pages/profile.php');
?>