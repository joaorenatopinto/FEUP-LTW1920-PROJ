<?php include_once('utils.php');?>

<?php function draw_property($property)
{  ?>
    <div class="property-card-container">
        <article class="property-card">
            <div class="property-img">
                <img alt="none for now" src="images/estrondo.jpg">
            </div>
            <div class="property-details">
                <h6 class="property-region"> <?= $property['location'] ?> </h6>
                <h4 class="property-title"> <a href="property.php?id=<?= $property['id'] ?>"> <?= $property['title'] ?> </a> </h4>
                <h6 class="property-pricing"> <strong> <?= $property['price'] ?> € / day </strong> </h6>
                <p class="property-description">
                    <?= $property['description'] ?>
                </p>
                <div class="property-features">
                    <div class="property-area">
                        <span class="area-icon"> </span>
                        <span class="value"> <?= $property['area'] ?>m² </span>
                    </div>
                    <div class="property-bedrooms">
                        <span class="bedrooms-icon"> </span>
                        <span class="value"> <?= $property['nbedrooms'] ?> bedrooms </span>
                    </div>
                    <div class="property-bathrooms">
                        <span class="bathroom-icon"> </span>
                        <span class="value"> <?= $property['nbathrooms'] ?> bathrooms </span>
                    </div>
                    <div class="property-kitchens">
                        <span class="kitchen-icon"> </span>
                        <span class="value"> <?= $property['nkitchens'] ?> kitchens </span>
                    </div>
                </div>
            </div>
        </article>
    </div>
<?php } ?>

<?php
function draw_all_properties($properties)
{
    foreach ($properties as $property) {
        draw_property($property);
    }
}
?>

<?php
function draw_list_property_header()
{ ?>
    <!DOCTYPE html>
    <html lang="en-US">

    <head>
        <title>Houst.</title>
        <meta charset="UTF-8">
        <link href="css/list_property.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
<?php } ?>


<?php function draw_list_property()
{ session_start();
if(!isset($_SESSION['username']))
    header('Location: login.php');
     ?>
    <div class="list-property-card">
        <header>
            <h3>List Property</h3>
        </header>
        <form id="list-property-form" method="post" action="action_list_property.php">
            <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
            <input id="lp-title" type="text" name="title" placeholder="Title for the ad"/>
            <br/>
            <textarea name="description" form="list-property-form" cols="20" rows="10" placeholder="Enter a description about of the house!"></textarea>
            <br/>
            <?php country_dropdown(null); ?>
            <br/>
            <input id="lp-location" type="text" name="location" placeholder="Location"/>
            <br/>
            <input id="lp-adress" type="text" name="adress" placeholder="Adress"/>
            <br/>
            <input id="lp-bathrooms" type="number" name="bathrooms" placeholder="No. of bathrooms"/>
            <br/>
            <input id="lp-bedrooms" type="number" name="bedrooms" placeholder="No. of bedrooms"/>
            <br/>
            <input id="lp-kitchens" type="number" name="kitchens" placeholder="No. of kitchens"/>
            <br/>
            <input id="lp-livingrooms" type="number" name="livingrooms" placeholder="No. of livingrooms"/>
            <br/>
            <input type="radio" name="type" value="flat"> Flat/Apartment
            <br/>
            <input type="radio" name="type" value="house"> House
            <br/>
            <input id="lp-price" type="number" name="price" placeholder="Price per day (€)"/>
            <br/>
            <input id="lp-area" type="number" name="area" placeholder="Area of the property"/>
            <br/>
            <input id="lp-startPeriod" type="date" name="startDate"/>
            <br/>
            <input id="lp-endPeriod" type="date" name="endDate"/>
            <input id="lp-submit" type="submit" value="List Property">
        </form>
    </div>
<?php } ?>