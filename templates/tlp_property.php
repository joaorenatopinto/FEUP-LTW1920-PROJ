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