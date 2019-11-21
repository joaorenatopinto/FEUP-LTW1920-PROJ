<!-- eventualmente fazer aceitar argumento $advert com info sobre casa e whatnot -->
<?php function draw_property()
{  ?>
    <div class="property-card-container">
        <article class="property-card">
            <div class="property-img">
                <img alt="none for now" src="images/house-example.jpg">
            </div>
            <div class="property-details">
                    <h6 class="property-region"> Areosa, Porto, Portugal </h6>
                    <a href="#" class="property-title-link"> <h4 class="property-title"> Casa Areosa Para Estudantes </h4> </a>
                    <h6 class="property-pricing"> <strong> 365.000 € </strong> </h6>
                <p class="property-description">
                    Descrição mais detalhada da casa dada pelo dono.
                    Descrição mais detalhada da casa dada pelo dono.
                    Descrição mais detalhada da casa dada pelo dono.
                    Descrição mais detalhada da casa dada pelo dono.
                    Descrição mais detalhada da casa dada pelo dono.
                </p>
                <div class="property-features">
                    <div class="property-area">
                        <span class="area-icon"> </span>
                        <span class="value"> 255m² </span>
                    </div>
                    <div class="property-bedrooms">
                        <span class="bedrooms-icon"> </span>
                        <span class="value"> 4 bedrooms </span>
                    </div>
                    <div class="property-bathrooms">
                        <span class="bathroom-icon"> </span>
                        <span class="value"> 3 bathrooms </span>
                    </div>
                </div>
            </div>
        </article>
    </div>

<?php } ?>