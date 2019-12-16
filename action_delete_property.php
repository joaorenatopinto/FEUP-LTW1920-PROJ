<?php
    include_once('database/db_properties.php');

    if(isset($_GET['id'])){
        $id = htmlentities($_GET['id']);
        delete_property($id);
    }
    header('Location: profile.php');
?>