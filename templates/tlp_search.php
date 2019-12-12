<?php function draw_search_interface()
{ ?>
    <form method="GET" action="search.php" class="search_ui">
        <input type="text" name="search-location" class="search-input-location" placeholder="Location">

        <select name="search-price" class="search-input-price">
            <option value="0" <?php if(isset($_GET['search-price']) && $_GET['search-price']=="0") echo 'selected'; ?>> Price range </option>
            <option value="1" <?php if(isset($_GET['search-price']) && $_GET['search-price']=="1") echo 'selected'; ?>> 0-100 € </option>
            <option value="2" <?php if(isset($_GET['search-price']) && $_GET['search-price']=="2") echo 'selected'; ?>> 100-200 € </option>
            <option value="3" <?php if(isset($_GET['search-price']) && $_GET['search-price']=="3") echo 'selected'; ?>> 200-300 € </option>
            <option value="4" <?php if(isset($_GET['search-price']) && $_GET['search-price']=="4") echo 'selected'; ?>> 300-500 € </option>
            <option value="5" <?php if(isset($_GET['search-price']) && $_GET['search-price']=="5") echo 'selected'; ?>> 500+ € </option>
        </select>

        <select name="search-bedrooms" class="search-input-bedrooms">
            <option value="0" <?php if(isset($_GET['search-bedrooms']) && $_GET['search-bedrooms']=="0") echo 'selected'; ?>> No. Bedrooms </option>
            <option value="1" <?php if(isset($_GET['search-bedrooms']) && $_GET['search-bedrooms']=="1") echo 'selected'; ?>> 1 bedroom </option>
            <option value="2" <?php if(isset($_GET['search-bedrooms']) && $_GET['search-bedrooms']=="2") echo 'selected'; ?>> 2 bedrooms </option>
            <option value="3" <?php if(isset($_GET['search-bedrooms']) && $_GET['search-bedrooms']=="3") echo 'selected'; ?>> 3 bedrooms </option>
            <option value="4" <?php if(isset($_GET['search-bedrooms']) && $_GET['search-bedrooms']=="4") echo 'selected'; ?>> 4 bedrooms </option>
            <option value="5" <?php if(isset($_GET['search-bedrooms']) && $_GET['search-bedrooms']=="5") echo 'selected'; ?>> 5+ bedrooms</option>
        </select>

        <select name="search-bathrooms" class="search-input-bathrooms">
            <option value="0" <?php if(isset($_GET['search-bathrooms']) && $_GET['search-bathrooms']=="0") echo 'selected'; ?>> No. Bathrooms </option>
            <option value="1" <?php if(isset($_GET['search-bathrooms']) && $_GET['search-bathrooms']=="1") echo 'selected'; ?>> 1 bathroom</option>
            <option value="2" <?php if(isset($_GET['search-bathrooms']) && $_GET['search-bathrooms']=="2") echo 'selected'; ?>> 2 bathrooms</option>
            <option value="3" <?php if(isset($_GET['search-bathrooms']) && $_GET['search-bathrooms']=="3") echo 'selected'; ?>> 3+ bathrooms</option>
        </select>

        <input type="date" id="search-date-start" name="search-date-start" <?php if(isset($_GET['search-date-start']) && $_GET['search-date-start']!='') echo 'value=' . $_GET['search-date-start']; ?> />
        <input type="date" id="search-date-end" name="search-date-end" <?php if(isset($_GET['search-date-end']) && $_GET['search-date-end']!='') echo 'value=' . $_GET['search-date-end']; ?> />

        <select name="search-type" class="search-input-type">
            <option value="any" <?php if(isset($_GET['search-type']) && $_GET['search-type']=="any") echo 'selected'; ?>> Any House Type </option>
            <option value="flat" <?php if(isset($_GET['search-type']) && $_GET['search-type']=="flat") echo 'selected'; ?>> Flat/Apartment </option>
            <option value="house" <?php if(isset($_GET['search-type']) && $_GET['search-type']=="house") echo 'selected'; ?>> House </option>
        </select>
        
        <select name="order" class="order-by-select">
            <option value="price-asc"> Order by Price: Low to High </option>
            <option value="price-desc"> Order by Price: High to Low</option>
            <option value="newest" selected> Order by Newest </option>
            <option value="oldest"> Order by Oldest </option>
        </select>

        <input id="search-submit" type="submit" value="Search">
    </form>
<?php } ?>