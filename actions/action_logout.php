<?php
    session_start();
    session_regenerate_id(true);

    unset($_SESSION['username']);
    header("Location: ../pages/main_page.php");
?>