<?php
    // search-results.php 
    // process search results 
    // include("../handler/head.php");

    // receive search variables
    // location
$location = $_GET['search'];

include("include/connect.php");

$stmt = $pdo->prepare("SELECT * FROM `foodprograms` WHERE `city`, `streetAddress` LIKE '*$location*'");

$stmt->execute();


while($row = $stmt->fetch()){

    echo($row['programName']);

}



?>