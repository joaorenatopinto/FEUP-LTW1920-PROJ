<?php function draw_signup()
{ ?>
    <div class="signup-card">
        <header>
            <h3>Sign Up</h3>
        </header>
        <form class="signup-form" method="post" action="../actions/action_signup.php">
            <input id="sp-firstname" type="text" name="firstname" placeholder="First Name" required>
            <input id="sp-lastname" type="text" name="lastname" placeholder="Last Name" required>
            <input id="sp-username" type="text" name="username" placeholder="Username" required>
            <input id="sp-password" type="password" name="password" placeholder="Password"  onKeyUp="checkStrength()" required>
            <meter max="4" value="0" id="password-strength-meter"></meter>
            <input id="sp-confirmpassword" type="password" name="confirm-password" placeholder="Confirm Your Password" required>
            <input id="sp-submit" type="submit" value="Sign Up">
        </form>
        <p> Already have an account? Login <a href="../pages/login.php"> here! </a> </p>
        <a href="../pages/main_page.php"> <p> Or click here to go back ← </p> </a>
    </div>
    <script src="../scripts/password.js">  </script>
<?php } ?>

<?php function draw_login() { ?>
    <div class="login-card">
        <header>
            <h3>Welcome back!</h3>
        </header>
        <form class="login-form" method="post" action="../actions/action_login.php">
            <input id="li-username" type="text" name="username" placeholder="Username" required="">
            <input id="li-password" type="password" name="password" placeholder="Password" required="">
            <input id="li-submit" type="submit" value="Log In">
        </form>
        <p> Don't have an account? Sign up <a href="../page/signup.php">here! </a> </p>
        <a href="../pages/main_page.php"> <p> Or click here to go back ← </p> </a>
    </div>
<?php } ?>

<?php function draw_edit($user) { ?>
    <div class="edit-card">
        <header>
            <h3>Edit Your Profile</h3>
        </header>
        <form class="edit-form" method="post" action="../actions/action_edit_profile.php" enctype="multipart/form-data">
            <input type="hidden" name="username" value="<?= $user['username'] ?>">
            <input id="edit-name" type="text" name="name" placeholder="Name" value="<?= $user['fullname'] ?>">
            <input id="edit-email" type="text" name="email" placeholder="Email" value="<?= $user['email'] ?>">
            <?php include_once('../templates/utils.php'); country_dropdown($user['country']); ?>
            <textarea name="bio" id="edit-bio" form="edit-form" cols="20" rows="10" placeholder="Enter a small bio about yourself!"><?php echo$user['bio'];?></textarea>
            <input id="edit-password" type="password" name="password" placeholder="New Password">
            <input id="edit-confirmpassword" type="password" name="confirm-password" placeholder="Confirm Your New Password">
            <input type="file" name="image" id="image"/>
            <input id="edit-submit" type="submit" value="Edit Profile">
        </form>
        <a href="../pages/main_page.php"> <p> Or click here to go back ← </p> </a>
    </div>
<?php } ?>