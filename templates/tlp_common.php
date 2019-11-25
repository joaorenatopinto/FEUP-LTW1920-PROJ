<?php function draw_header() { ?>
    <!DOCTYPE html>
    <html lang="en-US">
    <head>
        <title>Houst.</title>
        <meta charset="UTF-8">
        <link href="css/navbar.css" rel="stylesheet">
        <link href="css/common.css" rel="stylesheet">
        <link href="css/profile.css" rel="stylesheet">
        <link href="css/property-card.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
<?php } ?>

<!-- fazer aceitar $username como argumento para fazer navbar diferente para user -->
<?php function draw_navbar(){ ?>
    <header class="navbar">
        <div class="logo_container">
            <img class="logo" src="images/logo/logo.png" alt="logo">
        </div>

        <nav>
            <ul class="nav_links">
                <li><a href="#">Properties</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Profile</a></li>
            </ul>
        </nav>
        <a class="cta" href="#"><button>List Property</button></a>
    </header>
<?php } ?>

<?php function draw_footer() { ?>
    </body>
    </html>
<?php } ?>