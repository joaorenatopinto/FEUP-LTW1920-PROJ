<?php function draw_search_interface()
{ ?>
    <form method="GET" action="search.php" class="search_ui">
        <input type="text" name="search_location" class="search_input_location" placeholder="Search by location">
        <select name="search_price" class="search_input_price">
            <option value="0"> Choose your price range: </option>
            <option value="1"> 0-100 </option>
            <option value="2"> 100-200 </option>
            <option value="3"> 200-300 </option>
            <option value="4"> 300-500 </option>
            <option value="5"> 500+ </option>
        </select> 
    </form>
<?php } ?>