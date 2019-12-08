<?php function draw_header() { ?>
    <!DOCTYPE html>
    <html lang="en-US">
    <head>
        <title>Houst.</title>
        <meta charset="UTF-8">
        <link href="css/navbar.css" rel="stylesheet">
        <link href="css/footer.css" rel="stylesheet">
        <link href="css/common.css" rel="stylesheet">
        <link href="css/profile.css" rel="stylesheet">
        <link href="css/property-card.css" rel="stylesheet">
        <link href="css/reservation-card.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
<?php } ?>
    
<?php function draw_navbar(){ ?>
    <header class="navbar">
        <div class="logo_container">
            <a href="main_page.php"> <img class="logo" src="images/logo/logo.png" alt="logo"> </a>
        </div>

        <nav>
            <ul class="nav_links">
                <li><a href="#">Messages</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </nav>
        <a href="list_property.php"><button>List Property</button></a>
    </header>
<?php } ?>

<?php function draw_footer() { ?>
    <div class = footer>
        <div class="logo_container">
            <img class="logo" src="images/logo/logo.png" alt="logo">
        </div>
    </div>
    </html>
<?php } ?>