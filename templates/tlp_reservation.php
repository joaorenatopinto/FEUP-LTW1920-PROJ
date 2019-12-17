<?php function draw_reservation_card($reservation, $property) { ?> 
    <div class="reservation-card-container">
        <article class="reservation-card">
            <div class="reservation-img">
                <img alt="none for now" src="images/properties/<?php
                    if(file_exists('images/properties/' . $property['id'] . '.png')) {
                        echo $property['id'] . '.png">';
                    }
                    else echo $property['id'] . '.jpg">';
                ?>
            </div>
            <div class="reservation-details">
                <h6 class="reservation-region"> <?=$property['location'] ?> </h6>
                <h4 class="reservation-title"> <a href="property.php?id=<?= $property['id'] ?>"> <?= $property['title'] ?> </a> </h4>
                <h6 class="reservation-pricing"> <strong> <?= $property['price'] ?> € / day (total: <?= (1+days_between_strdates($reservation['end_date'], $reservation['start_date'])) * $property['price'] ?> €)</strong> </h6>
                <p class="reservation-start"> Start: <?= $reservation['start_date'] ?> </p>
                <p class="reservation-end"> End: <?= $reservation['end_date'] ?> </p>
            </div>
            <div class="reservation-options">
                <button onclick="location.href = 'actions/action_cancel_reservation.php?id= <?=$reservation['id'] ?>'">Cancel</button>
            </div>
        </article>
    </div>
<?php } ?>

<?php function draw_reservation_card2($reservation, $property) { 
    include_once('database/db_users.php');
    include_once('templates/utils.php');
    $client = get_user($reservation['client_id']);?>
    <div class="reservation-card-container2">
        <div class="reservation-usr-image">
            <a href="profile.php?username=<?= $client['username'] ?>">
        <?php
            echo '<img alt="none" src="images/users/';
            if(file_exists("images/users/" . $reservation['client_id'] . ".png")) echo $reservation['client_id'] . '.png">';
            else if(file_exists("images/users/" . $reservation['client_id'] . ".jpg")) echo $reservation['client_id'] . '.jpg">';
            else echo 'default.png">';
            ?>
            </a>
        </div>
        <div class="reservation-details2">
            <h4 class="reservation-client2"> Reservation made by <a class="profile-link" href="profile.php?username=<?= $client['username'] ?>"><strong> <?= $client['fullname'] ?> </strong> </a> </h4>
            <h6 class="reservation-pricing2"> <strong> <?= $property['price'] ?> € / day (total: <?= (1+days_between_strdates($reservation['end_date'], $reservation['start_date'])) * $property['price'] ?> €)</strong> </h6>
            <p class="reservation-start2"> <strong>Start:</strong> <?= $reservation['start_date'] ?> </p>
            <p class="reservation-end2"> <strong>End:</strong> <?= $reservation['end_date'] ?> </p>
        </div>
        <div class="reservation-options">
            <button onclick="location.href = 'actions/action_cancel_reservation.php?id= <?=$reservation['id'] ?>'">Cancel</button>
        </div>
    </div>
<?php } ?>