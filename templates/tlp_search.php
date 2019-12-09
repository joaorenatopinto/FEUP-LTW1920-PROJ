<?php function draw_search_interface()
{ ?>
    <form method="GET" action="search.php" class="search_ui">
        <input type="text" name="search-location" class="search-input-location" placeholder="Location">

        <select name="search-price" class="search-input-price">
            <option value="0"> Price range </option>
            <option value="1"> 0-100 € </option>
            <option value="2"> 100-200 € </option>
            <option value="3"> 200-300 € </option>
            <option value="4"> 300-500 € </option>
            <option value="5"> 500+ € </option>
        </select>

        <select name="search-bedrooms" class="search-input-bedrooms">
            <option value="0"> No. Bedrooms </option>
            <option value="1"> 1 bedrooms </option>
            <option value="2"> 2 bedrooms </option>
            <option value="3"> 3 bedrooms </option>
            <option value="4"> 4 bedrooms </option>
            <option value="5"> 5+ bedrooms</option>
        </select>

        <select name="search-bathrooms" class="search-input-bathrooms">
            <option value="0"> No. Bathrooms </option>
            <option value="1"> 1 bathrooms</option>
            <option value="2"> 2 bathrooms</option>
            <option value="3"> 3+ bathrooms</option>
        </select>

        <input type="date" id="search-date-start" name="search-date-start"/>
        <input type="date" id="search-date-end" name="search-date-end"/>

        <select name="search-type" class="search-input-type">
            <option value="any"> Any </option>
            <option value="flat"> Flat/Apartment </option>
            <option value="house"> House </option>
        </select>
        

        <input id="lp-submit" type="submit" value="Search">
    </form>
<?php } ?>