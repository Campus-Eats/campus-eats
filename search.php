<?php
session_start();

    // search.php

    include("include/connect.php");

    // Hide undefined index error
    error_reporting(E_ALL ^ E_NOTICE);

    $cityToSearch = $_GET["city"];
    $stmt = $pdo->prepare("SELECT * FROM `foodprograms` WHERE `city` LIKE '%$cityToSearch%'");
    $stmt->execute();

    // $programIdtoFetch = $_GET["programID"];
	// $stmt = $pdo->prepare("SELECT * FROM `foodprograms` WHERE `programID` = '$programIdtoFetch'");
	// $stmt->execute();
	// $row = $stmt->fetch();

    $cityImage;
    $programList = array();
    while($row = $stmt->fetch()) {
        $programList[] = $row;
        $cityImage = strtolower($row["city"]); //strtolower() function
    }
    // echo($cityImage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
    <?php include("include/head.php");?>
    <link rel="stylesheet" type="text/css" href="css/search.css">

</head>
<body>
    <?php include("include/header.php");?>
    <main>
        <!-- SEARCH NAVIGATION -->
        <div class="search_nav">
            <div class="ce-container search_nav_content">
                <h2>Search</h2>
                <form class="search-form" action="handlers/searchResults.php" method="POST">
                    <input class="ce-field" type="text" placeholder="Enter Your Location" name="search" value="<?php echo $cityToSearch?>">
                    <button class="ce-button ce-button-primary"type="submit">Search</button>
                </form>
            </div>
        </div>

        <!-- DISPLAY SEARCH RESULTS & MAP  -->
        <div class="ce-container search-results">
            <div class="programs">
                <div class="header_line_divider">
                    <span class="header_wrapper">
                        <h2><strong>Programs</strong> in <?php echo($cityToSearch);?>, ON</h2>
                    </span>
                </div> 
                <?php foreach($programList as $program): ?>
                <div class="listEl_container">
                    <div class="listEl_full_content_container">
                        <div class="listEl_small_img">
                            <img src= <?php echo($program["image"]);?> alt="food image">
                        </div>
                        <div class="listEl_content_container">
                            <span class="listEl_header_top_wrapper">
                                <h4 class="header-4" id="programName">
                                    <?php echo $program["programName"]; ?>
                                </h4>
                                <span class="listEl_header_location">
                                    <i class="icon">
                                        <img src="assets/icon_location.svg" alt="location icon">
                                    </i> 
                                    <!-- distance hard-coded -->
                                    45 m
                                </span>
                            </span>
                            <p class="listEl_container_address" id="address">
                                <?php echo $program["address"]; ?>
                            </p>
                            <p class="listEl_container_para" id="description">
                                <?php echo $program["description"]; ?>
                            </p>
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
                            <?php
                                while($row = $stmt->fetch()) {
                                    $programID = $row["programID"];
                                }
                            ?>
                                <a href="<?php $programID=$program['programID'];echo("/campus-eats/program-page.php?programID=$programID");?>"> 
                                    <button class="button-small ce-button-secondary">
                                        See more
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="map">
                <div class="header_line_divider">
                    <h2>Map</h2>
                </div> 
                <img src="<?php echo("/campus-eats/assets/$cityImage");?>.png" alt="google maps image for city "> 
            </div>
        </div>

    </main>
    <?php include("include/footer.php");?>
    <script src="/campus-eats/js/main.js"></script>
</body>
</html>
