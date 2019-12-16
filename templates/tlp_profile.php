<?php include_once('tlp_property.php'); include_once('tlp_reservation.php'); ?>

<?php function draw_profile_card($user)
{ ?>
    <div class="profile-card">
        <div class="profile-img"> 
            <?php
                echo '<img alt="none" src="images/users/';
                if(file_exists("images/users/" . $user['username'] . ".png")) echo $user['username'] . '.png">';
                else if(file_exists("images/users/" . $user['username'] . ".jpg")) echo $user['username'] . '.jpg">';
                else echo 'default.png">';
            ?>
            <?php if($user['username']==$_SESSION['username'] && isset($_SESSION['username'])) { ?>
            <div class="profile-options">
                <button onclick="location.href = 'editprofile.php';">Edit</button></a>
                <button onclick="location.href = 'action_logout.php';">Log Out</button></a>
            </div>
            <?php } ?>
        </div>
        <div class="profile-details">
            <h4 class="profile-name"> <?= $user['fullname'] ?></h4>
            <p class="profile-country"> <span>Country:</span> <b><?php if(isset($user['country'])) echo $user['country']; else echo 'Not specified by user.'; ?> </b> </p>
            <p class="profile-email"> <span>Email:</span> <b><?php if(isset($user['email'])) echo $user['email']; else echo 'Not specified by user.'; ?> </b> </p>
            <p class="profile-bio"> <span>Bio:</span> <b><?php if(isset($user['bio'])) echo $user['bio']; else echo 'Not specified by user.'; ?> </b> </p>
            <p class="profile-creation-date"> Member since <?= $user['joindate'] ?> </p>
        </div>
    </div>
<?php } ?>

<?php function draw_owner_card($user) { ?> 
    <div class="owner-card-container">
        <h3> Owner: </h3>
        <a class="profile-link" href="profile.php?username=<?= $user['username'] ?>">
            <div class="owner-img">
                
                <?php
                    echo '<img alt="none" src="images/users/';
                    if(file_exists("images/users/" . $user['username'] . ".png")) echo $user['username'] . '.png">';
                    else if(file_exists("images/users/" . $user['username'] . ".jpg")) echo $user['username'] . '.jpg">';
                    else echo 'default.png">';
                ?>
                
            </div>
        </a>

        <div class="owner-details">
            <a class="profile-link" href="profile.php?username=<?= $user['username'] ?>">
                <h4 class="owner-name"> <?= $user['fullname'] ?></h4>
            </a>
            <p class="owner-country"> Country: <b> <?= $user['country'] ?> </b> </h6>
            <p class="owner-email"> Email: <b> <?= $user['email'] ?> </b> </h6>
            <p class="owner-creation-date"> Member since <?= $user['joindate'] ?> </p>
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