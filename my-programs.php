<?php
    session_start();
    $userID = $_SESSION['id'];

    include("include/connect.php");

    $stmt = $pdo->prepare("SELECT * FROM `foodprograms` WHERE `userID` = '$userID' ");
    $stmt->execute();
    $program = $stmt->fetch();
    $programID = $program['programID'];

    if ($program) {
        header("Location: /campus-eats/program-page.php?programID=$programID");
    } else {
        header('Location: /campus-eats/program-register.php');
    }
?>


