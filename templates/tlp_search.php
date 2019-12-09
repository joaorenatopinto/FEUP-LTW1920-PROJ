<?php function draw_search_interface()
{ ?>
    <form method="GET" action="search.php" class="search_ui">
        <input type="text" name="search-location" class="search-input-location" placeholder="Search by location">

        <select name="search-price" class="search-input-price">
            <option value="0"> Price range: </option>
            <option value="1"> 0-100 </option>
            <option value="2"> 100-200 </option>
            <option value="3"> 200-300 </option>
            <option value="4"> 300-500 </option>
            <option value="5"> 500+ </option>
        </select>

        <select name="search-bedrooms" class="search-input-bedrooms">
            <option value="0"> Bedrooms: </option>
            <option value="1"> 1 </option>
            <option value="2"> 2 </option>
            <option value="3"> 3 </option>
            <option value="4"> 4 </option>
            <option value="5"> 5+ </option>
        </select>

        <select name="search-bathrooms" class="search-input-bathrooms">
            <option value="0"> Bathrooms: </option>
            <option value="1"> 1 </option>
            <option value="2"> 2 </option>
            <option value="3"> 3+ </option>
        </select>

        <input type="date" id="search-date-start" name="search-date-start"/>
        <input type="date" id="search-date-end" name="search-date-end"/>

        <input type="radio" name="search-type" value="flat"> Flat/Apartment
        <input type="radio" name="search-type" value="house"> House
        <input type="radio" name="search-type" value="any" checked> Any
        

        <input id="lp-submit" type="submit" value="Search">
    </form>
<?php } ?>