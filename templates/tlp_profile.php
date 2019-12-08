<?php include_once('tlp_property.php'); include_once('tlp_reservation.php'); ?>

<?php function draw_profile_card($user)
{ ?>
    <div class="profile-card-container">
        <a href="editprofile.php?username=<?= $user['username'] ?>"> <button class="edit-profile">Edit Profile</button></a>
        <a href="action_logout.php"><button class="edit-profile">Logout</button></a>
        <div class="profile-card">
            <div class="profile-img"> 
                <?php
                    echo '<img alt="none" src="images/users/';
                    if(file_exists("images/users/" . $user['username'] . ".png")) echo $user['username'] . '.png">';
                    else echo 'default.jpg">';
                ?>
            </div>
            <div class="profile-details">
                <h4 class="profile-name"> <?= $user['fullname'] ?></h4>
                <h6 class="profile-placeholder"> Country: </h6>
                <h5 class="profile-country"><?= $user['country'] ?></h5>
                <h6 class="profile-placeholder"> Email: </h6>
                <h5 class="profile-email"> <?= $user['email'] ?> </h5>
                <h6 class="profile-placeholder"> Bio: </h6>
                <p class="profile-bio"> <?= $user['bio'] ?> </p>
                <p class="profile-creation-date"> Member since 22/11/2019 </p>
            </div>
        </div>
    </div>
<?php } ?>

<?php function draw_profile_ui($reservations, $reservation_properties, $properties){ ?>
    <script type="text/javascript" src="scripts/profile.js"></script>
    <div class="profile-properties-reservations">
        <input class="profile-show-properties" type="button" value="Properties" onclick="profile_show_actions(event)">
        <input class="profile-show-reservations" type="button" value="Reservations" onclick="profile_show_actions(event)">
    </div>
    <?php
        foreach($properties as $property) {
            draw_property($property);
        }
        foreach($reservations as $key=>$reservation) {
            draw_reservation_card($reservation, $reservation_properties[$key][0]);
        }   
    ?>
<?php } ?>