<?php
    //$property_id = $_GET['id'];
    //print($_GET['id']);

    include_once('templates/tlp_common.php');
    include_once('database/db_properties.php');
    include_once('database/db_reservations.php');
    include_once('database/db_users.php');
    include_once('templates/tlp_property.php');
    include_once('templates/tlp_reservation.php');
    include_once('templates/tlp_calendar.php');
    include_once('templates/tlp_profile.php');
    include_once('get_reservations.php');

    session_start();

    draw_header();
    draw_navbar();
    $property = get_property_by_id($_GET['id'])[0];
    draw_property($property);

    ?>
    <script type="text/javascript">
    function loadDoc(property_id) {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            var request = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            var request = new ActiveXObject("Microsoft.XMLHTTP");
        }
        request.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var reservations = JSON.parse(this.responseText);
                document.write(reservations);
            }
        };
        request.open("GET","getreservations.php?id="+property_id,true);
        request.send();
    } 
    </script>
    <?php
    
    echo "<script type='text/javascript'> loadDoc({$_GET['id']}); </script>";

    if(isset($_SESSION['username'])) {
        if($property['owner']==$_SESSION['username']) {
            $reservations = get_property_reservations($property['id']);
            draw_reservations_seperator();
            foreach($reservations as $reservation) {
                //draw_reservation_card($reservation, $property);
                draw_reservation_card2($reservation, $property);
            }
        }
        else {
            draw_reservation_ui($_GET['id']);
            draw_calendar();

            $owner = get_user($property['owner']);
            draw_profile_card($owner);
        }
    }
    else {
        echo '<p> You need to be logged in to make a reservation. </p>';
    }
?>