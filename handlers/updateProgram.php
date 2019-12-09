<?php
    // updateProgram.php updates program details page
    include("../include/connect.php");
    
    $programID = $_GET['programID'];
    $programName = $_POST['programName'];
    $description = $_POST['description'];
    $address = $_POST['address'];
    $addressDetails = $_POST['addressDetails'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $hours = $_POST['hours'];
    $uploaddir = '../assets/';
    $image = $uploaddir.basename($_FILES['image']['name']);
    
    
    // $stmt = $pdo->prepare("UPDATE`foodprograms` ( `programName`, `description`, `email`, `password`, `address`, `addressDetails`, `city`, `phone`, `hours`, `image`) 
    // VALUES ('$programName', :description, '$email', '$password', :address, :addressDetails, '$city', :phone, :hours, :image)");

    $stmt = $pdo->prepare("UPDATE `foodprograms` 
        SET `programName`= '$programName',`description`= '$description',`address`= '$address',`addressDetails`='$addressDetails',`city`= '$city',`phone`= '$phone',`hours`= '$hours',`image`= '$image'
        WHERE `foodprograms`.`programID` = $programID;");
    
    $stmt->execute(array(':description' => $description, ':address' => $address, ':addressDetails' => $addressDetails, ':city' => $city, ':phone' => $phone, ':hours' => $hours, ':image' => $image));
    
    header("Location:/campus-eats/program-page.php?programID=$programID");
?>