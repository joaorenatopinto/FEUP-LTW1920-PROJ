<?php function draw_signup()
{ ?>
    <div class="signup-card">
        <header>
            <h3>Sign Up</h3>
        </header>
        <form class="signup-form" method="post" action="action_signup.php">
            <input id="sp-firstname" type="text" name="firstname" placeholder="First Name" required="">
            <input id="sp-lastname" type="text" name="lastname" placeholder="Last Name" required="">
            <input id="sp-username" type="text" name="username" placeholder="Username" required="">
            <input id="sp-password" type="password" name="password" placeholder="Password" required="">
            <input id="sp-confirmpassword" type="password" name="confirm-password" placeholder="Confirm Your Password" required="">
            <input id="sp-submit" type="submit" value="Sign Up">
        </form>
        <p> Already have an account? Login <a href="login.php"> here! </a> </p>
        <a href="main_page.php"> <p> Or click here to go back ← </p> </a>
    </div>
<?php } ?>

<?php function draw_signup_header() { ?>
    <!DOCTYPE html>
    <html lang="en-US">
    <head>
        <title>Houst.</title>
        <meta charset="UTF-8">
        <link href="css/common.css" rel="stylesheet">
        <link href="css/signup.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
<?php } ?>

<?php function draw_login_header() { ?>
    <!DOCTYPE html>
    <html lang="en-US">
    <head>
        <title>Houst.</title>
        <meta charset="UTF-8">
        <link href="css/common.css" rel="stylesheet">
        <link href="css/login.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
<?php } ?>

<?php function draw_login() { ?>
    <div class="login-card">
        <header>
            <h3>Welcome back!</h3>
        </header>
        <form class="login-form" method="post" action="action_login.php">
            <input id="li-username" type="text" name="username" placeholder="Username" required="">
            <input id="li-password" type="password" name="password" placeholder="Password" required="">
            <input id="li-submit" type="submit" value="Sign Up">
        </form>
        <p> Don't have an account? Sign up <a href="signup.php">here! </a> </p>
        <a href="main_page.php"> <p> Or click here to go back ← </p> </a>
    </div>
<?php } ?>