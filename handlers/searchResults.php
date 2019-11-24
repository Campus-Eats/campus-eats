<?php
    // search-results.php 
    // process search results 
    $location = $_POST['search'];
    header("Location:/campus-eats/search.php?city=$location");
?>