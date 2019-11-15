<?php
    // searchResults.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/results.css">
    <link rel="stylesheet" type="text/css" href="css/ui.css">
    <title>Search Results</title>

    <?php include("include/head.php");?>
</head>
<body>
    <?php include("include/header.php");?>
    <main>
        <!-- TO INCLUDE: NAV SECTION BY YANG -->

        <!-- SEARCH NAVIGATION -->
     

    <div class="search-nav-container">
        <h2>Search</h2>
            <form class="search-bar" action="handlers/searchResults.php">
                <input class="field" type="text" placeholder="Enter Your Location" name="search">
                <button class="button button-primary"type="submit">Search</button>
            </form>
     </div>

        <!-- DISPLAY SEARCH RESULTS & MAP  -->
    <div class="search-results-wrapper">
        <div class="search-results-container" id="two">
            <h2>Results</h2>
            <div class="results-box-container">
                <h4 class="header-4">FoodShare</h4>
                <p>Helping students access food and essentials.</p>
                <button class="button-small">
                    <!-- <a href="<?php echo("article-form.php?articleId=$featuredArticleId");?>">Edit</a> -->
                    <a href="<?php echo("program-details.php");?>">See more</a>
                </button>
                <div class="results-small-imgs">
                    <!-- PHP IMAGE TO BE COMPLETED -->
                    <!-- <?php
                        $imagePath = $row["image"];
                        echo("<img src='$imagePath' width=300 height=200>");
                    ?> -->
                    <!-- TEMP STATIC IMG -->
                    <!-- <img src="assets/1.png" alt="image placeholder"> -->
                </div>
            </div>
        </div>
        <div class="search-results-map-container" id="three">
            <p>map<p>
        </div>
    </div>

    </main>
    <?php include("include/footer.php");?>
    <script src="/campus-eats/js/main.js"></script>
</body>
</html>