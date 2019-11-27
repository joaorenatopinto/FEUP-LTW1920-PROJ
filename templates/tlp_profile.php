<?php function draw_profile_card($user)
{ ?>
    <div class="profile-card-container">
        <div class="profile-card">
            <div class="profile-img">
                <img alt="none" src="images/profile.jpg">
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

<?php function draw_profile_ui()
{ ?>
    <div class="profile-properties-reservations">
        <input class="profile-show-properties" type="button" value="Properties">
        <input class="profile-show-reservations" type="button" value="Reservations">
    </div>
<?php } ?>