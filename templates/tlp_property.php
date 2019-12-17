<?php include_once('utils.php'); include_once('tlp_calendar.php'); ?>

<?php function draw_property($property)
{  ?>
    <div class="property-card-container">
        <article class="property-card">
            <div class="property-img">
                <img alt="none for now" src="../images/properties/<?php
                    if(file_exists('../images/properties/' . $property['id'] . '.png')) {
                        echo $property['id'] . '.png">';
                    }
                    else echo $property['id'] . '.jpg">';
                ?>

            </div>
            <div class="property-details">
                <div class="region-options-div"> 
                    <h6 class="property-region"> <?= $property['location'] ?> </h6>
                    <?php if(isset($_SESSION['username']) && $property['owner'] == $_SESSION['username'] && !preg_match('/main_page.php$/', $_SERVER['REQUEST_URI'])) { ?>
                    <button onclick="location.href = '../actions/action_delete_property.php?id= <?= $property['id'] ?>'">Delete</button>
                    <?php } ?>
                </div>
                <h4 class="property-title"> <a href="../pages/property.php?id=<?= $property['id'] ?>"> <?= $property['title'] ?> </a> </h4>
                <h6 class="property-pricing"> <strong> <?= $property['price'] ?> € / day </strong> </h6>
                <p class="property-description">
                    <?= $property['description'] ?>
                </p>
                <div class="property-features">
                    <div class="property-area">
                        <span class="area-icon"> </span>
                            <img alt="area" src="../images/resources/area.png">
                        <span class="value"> <?= $property['area'] ?>m² </span>
                    </div>
                    <div class="property-bedrooms">
                        <span class="bedrooms-icon"> </span>
                            <img alt="bedroom" src="../images/resources/bedroom.png">
                        <span class="value"> <?= $property['nbedrooms'] ?> bedrooms </span>
                    </div>
                    <div class="property-bathrooms">
                        <span class="bathroom-icon"> </span>
                            <img alt="bathroom" src="../images/resources/bathroom.png">
                        <span class="value"> <?= $property['nbathrooms'] ?> bathrooms </span>
                    </div>
                    <div class="property-kitchens">
                        <span class="kitchen-icon"> </span>
                            <img alt="kitchen" src="../images/resources/kitchen.png">
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

<?php function draw_list_property()
{ session_start();
if(!isset($_SESSION['username']))
    header('Location: ../pages/login.php');
     ?>
    <div class="list-property-card">
        <header>
            <h3>List Property</h3>
        </header>
        <form class="list-property-form" method="post" action="../actions/action_list_property.php" enctype="multipart/form-data">
            <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
            <input id="lp-title" type="text" name="title" placeholder="Title for the ad" required/>
            <br/>
            <textarea name="description" form="list-property-form" cols="20" rows="10" placeholder="Enter a description about of the house!" required></textarea>
            <br/>
            <?php country_dropdown(null); ?>
            <br/>
            <input id="lp-location" type="text" name="location" placeholder="Location" required/>
            <br/>
            <input id="lp-adress" type="text" name="adress" placeholder="Adress" required/>
            <br/>
            <input id="lp-bathrooms" type="number" min="0" name="bathrooms" placeholder="No. of bathrooms" required/>
            <br/>
            <input id="lp-bedrooms" type="number" min="0" name="bedrooms" placeholder="No. of bedrooms" required/>
            <br/>
            <input id="lp-kitchens" type="number" min="0" name="kitchens" placeholder="No. of kitchens" required/>
            <br/>
            <input id="lp-livingrooms" type="number" min="0" name="livingrooms" placeholder="No. of livingrooms" required/>
            <div> <input type="radio" name="type" id="flat" value="flat" required> Flat/Apartment </div>
            <div> <input type="radio" name="type" value="house" required> House </div>
            <input id="lp-price" type="number" name="price" min="0" placeholder="Price per day (€)" required/>
            <br/>
            <input id="lp-area" type="number" name="area" min="0" placeholder="Area of the property" required/>
            <br/>
            <input id="lp-startPeriod" type="date" name="startDate" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" required/>
            <br/>
            <input id="lp-endPeriod" type="date" name="endDate" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" required/>
            <br/>
            <input type="file" name="property_image" id="image" required/>
            <br/>
            <input id="lp-submit" type="submit" value="List Property">
        </form>
    </div>
<?php } ?>

<?php function draw_reservation_ui($property_id, $owner) { ?>
    <div class="reservation-ui-container">
        <div class="reservation-picker">
            <?php draw_calendar($property_id);
            if(isset($_SESSION['username']) && $_SESSION['username']!='') { ?>
                <form id="reservation-form" method="post" action="../actions/action_reservation.php">
                    <input type="hidden" name="property_id" value="<?= $property_id ?>">
                    <input type="date" id="reservation-start" name="reservation-start" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>"/>
                    <input type="date" id="reservation-end" name="reservation-end" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>"/>
                    <input type="submit" id="reservation-submit" value="Submit Reservation"/>
                </form>
            <?php } 
            else {
                echo '<p class="login-warning"> Log In to make a reservation! </p>'; 
            } ?>
        </div>
        <?php draw_owner_card($owner); ?>
    </div>
<?php } ?>

<?php function draw_reservations_seperator() { ?> 
    <h6 class="reservations-seperator"> Reservations </h6>
<?php } ?>