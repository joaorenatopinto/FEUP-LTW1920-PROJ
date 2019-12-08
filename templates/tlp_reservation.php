<?php function draw_reservation_card($reservation, $property) { ?> 
    <div class="reservation-card-container">
        <article class="reservation-card">
            <div class="reservation-img">
                <img alt="none for now" src="images/estrondo.jpg">
            </div>
            <div class="reservation details">
                <h6 class="reservation-region"> <?=$property['location'] ?> </h6>
                <h4 class="reservation-title"> <a href="property.php?id=<?= $property['id'] ?>"> <?= $property['title'] ?> </a> </h4>
                <h6 class="reservation-pricing"> <strong> <?= $property['price'] ?> € / day </strong> </h6>
                <p class="reservation-start"> Start: <?= $reservation['start_date'] ?> </p>
                <p class="reservation-end"> End: <?= $reservation['end_date'] ?> </p>
            </div>
        </article>
    </div>
<?php } ?>