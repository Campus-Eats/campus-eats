<?php
    // searchResults.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/results.css">
    <link rel="stylesheet" type="text/css" href="css/ui.css">
    <title>Search Results</title>

    <?php include("include/head.php");?>
</head>
<body>
    <?php include("include/header.php");?>
    <main id="wrapper-container">

        <!-- SEARCH NAVIGATION -->

        <div class="search_nav_container">
            <div class="search_nav_content_container">
                <h2 class="header_2">Search</h2>
                <form class="search-bar" action="handlers/searchResults.php?location=<?php echo($city) ?>" method="GET">
                    <input class="field" type="text" placeholder="Enter Your Location" name="search">
                    <button class="button button-primary"type="submit">Search</button>
                </form>
            </div>
        </div>

            <!-- DISPLAY SEARCH RESULTS & MAP  -->
        <div class="search_results_wrapper">
            <div class="container">
                <div class="search_results_grid_12_col">
                    <div class="search_results_container" id="two">
                        <div class="header_line_divider">
                            <h2>Results</h2>
                        </div> 
                        <div class="legend_container">
                            <div class="legend_content_wrapper">
                                
                            </div>
                        </div>
                        <div class="listEl_container">
                            <div class="listEl_full_content_container">
                                    <div class="listEl_box_small_img">
                                        <!-- PHP IMAGE TO BE COMPLETED -->
                                        <!-- <?php
                                                $imagePath = $row["image"];
                                                echo("<img src='$imagePath'>");
                                            ?> -->
                                        <!-- TEMP STATIC IMG -->
                                        <img src="assets/img_good_food.png" alt="image placeholder">
                                    </div>
                                    <div class="listEl_content_container">
                                        <h4 class="header-4">FoodShare</h4>
                                        <p class="listEl_container_address" id="program_address">[insert php add] Sheridan College Trafalgar (Oakville) Campus Located upstairs in Union Square right next to the Coffee Loft (Student Union Building)</p>
                                        <p class="listEl_container_para" id="program_details">[insert php details] Helping students access food and essentials.</p>
                                        <div class="bottom_content_holder">
                                            <div class="icon_holder">
                                                <i class="icon">
                                                    <img src="assets/freshProduce.svg" alt="fresh food">
                                                </i>
                                                <i class="icon">
                                                    <img src="assets/cannedFood.svg" alt="canned food">
                                                </i>
                                            </div>
                                                <!-- <a href="<?php echo("article-form.php?articleId=$featuredArticleId");?>">Edit</a> -->
                                            <a href="<?php echo("program-details.php");?>"> 
                                                <button class="button-small button-secondary">See more
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="search_results_map_container" id="three">
                        <div class="header_line_divider">
                            <h2>Map</h2>
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