<?php
    // searchResults.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/results.css">
    <link rel="stylesheet" type="text/css" href="css/ui.css">

    <?php include("include/head.php");?>
</head>
<body>
    <?php include("include/header.php");?>
    <main id="wrapper-container">

        <!-- SEARCH NAVIGATION -->

        <div class="search_nav_container">
            <div class="search_nav_content_container">
                <h2 class="header_2">Search</h2>
                <form class="search-bar" action="handlers/searchResults.php?location=<?php echo($location) ?>" method="GET">
                    <input class="field" type="text" placeholder="Enter Your Location" name="search">
                    <button class="button button-primary"type="submit">Search</button>
                </form>
            </div>
        </div>

            <!-- DISPLAY SEARCH RESULTS & MAP  -->
        <div class="search_results_wrapper">
            <div class="container">
                <div class="search_results_grid_12_col">
                    <div class="search_results_list_container" id="two">
                        <!-- <div class="legend_container">
                            <div class="legend_content_wrapper">
                                <h5 id="legend_header_text">Legend</h4>
                                <div class="legend_holder">
                                    <span class="icon_holder">
                                        <i class="icon">
                                            <img src="assets/freshProduce.svg" alt="fresh food">
                                        </i> 
                                    </span>
                                    <p>Fresh Produce</p>
                                    <span class="icon_holder">
                                        <i class="icon">
                                            <img src="assets/cannedFood.svg" alt="canned food">
                                        </i> 
                                    </span>
                                    <p>Canned Goods</p>
                                </div>
                            </div>
                        </div> -->
                        <div class="header_line_divider">
                            <span class="header_wrapper">
                                <h2>Programs</h2>
                            
                            </span>
                        </div> 
                        <div class="listEl_container">
                            <div class="listEl_full_content_container">
                                <div class="listEl_small_img">
                                    <!-- PHP IMAGE TO BE COMPLETED -->
                                    <!-- <?php
                                            $imagePath = $row["image"];
                                            echo("<img src='$imagePath'>");
                                        ?> -->
                                    <!-- TEMP STATIC IMG -->
                                    <img src="assets/img_good_food.png" alt="image placeholder">
                                </div>
                                <div class="listEl_content_container">
                                    <span class="listEl_header_top_wrapper">
                                        <h4 class="header-4" id="programName">FoodShare</h4>
                                        <span class="listEl_header_location">
                                            <i class="icon">
                                                <img src="assets/icon_location.svg" alt="location icon">
                                            </i> 
                                            <!-- distance hard-coded -->
                                            <p>45 m</p>
                                        </span>
                                    </span>
                                    <p class="listEl_container_address" id="address">Sheridan College Trafalgar (Oakville) Campus Located upstairs in Union Square right next to the Coffee Loft (Student Union Building)</p>
                                    <p class="listEl_container_para" id="details">Helping students access food and essentials.</p>
                                    <div class="bottom_content_holder">
                                        <span class="icon_holder">
                                            <i class="icon">
                                                <img src="assets/freshProduce.svg" alt="fresh food">
                                            </i> 
                                        </span>
                                        <p>Fresh Produce</p>
                                        <span class="icon_holder">
                                            <i class="icon">
                                                <img src="assets/cannedFood.svg" alt="canned food">
                                            </i> 
                                        </span>
                                        <p>Canned Goods</p>
                                        <a href="<?php echo("program-details.php?programID=$programID");?>"> 
                                            <button class="button-small button-secondary">See more
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search_results_map_container" id="three">
                        <div class="container">
                            <div class="header_line_divider">
                                <h2>Map</h2>
                            </div> 
                            <div class="map" id="img_location_map">
                                <img src="assets/img_map_oakville.svg" alt="google maps image placeholder oakville"> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php include("include/footer.php");?>
    <script src="/campus-eats/js/main.js"></script>
</body>
</html>