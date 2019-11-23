<?php

$location = $_GET['search'];

include("include/connect.php");

$stmt = $pdo->prepare("SELECT * FROM `foodprograms` WHERE `city`, `streetAddress` LIKE '$location'");

$stmt->execute();

$row = while($stmt->fetch()){

    echo($row['programName']);
    echo($row['programName']);
    echo($row['programName']);
    echo($row['programName']);
    echo($row['programName']);

}

?>