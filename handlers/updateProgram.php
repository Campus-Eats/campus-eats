<?php
    // updateProgram.php updates program details page
    include("../include/connect.php");

    $programName = $_POST['programName'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    $address = $_POST['address'];
    $addressDetails = $_POST['addressDetails'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $hours = $_POST['hours'];
    $uploaddir = '../assets/';
    $image = $uploaddir.basename($_FILES['image']['name']);
    
    echo($image);
    
    include("../include/connect.php");
    
    // $stmt = $pdo->prepare("UPDATE`foodprograms` ( `programName`, `description`, `email`, `password`, `address`, `addressDetails`, `city`, `phone`, `hours`, `image`) 
    // VALUES ('$programName', :description, '$email', '$password', :address, :addressDetails, '$city', :phone, :hours, :image)");

    $stmt = $pdo->prepare("UPDATE `foodprograms` 
        SET `programName`= '$programName',`password`= '$password',`email`= '$email',`description`= '$description',`address`= '$address',`addressDetails`='$addressDetails',`city`= '$city',`phone`= '$phone',`hours`= '$hours',`image`= '$image'
        WHERE `foodprograms`.`programID` = $programID;");
    
    $stmt->execute(array(':description' => $description, ':address' => $address, ':addressDetails' => $addressDetails, ':phone' => $phone, ':hours' => $hours, ':image' => $image));
    
    // echo('{"success":"true"}');
    
    var_dump($stmt);
    // header("Location:login.php");

    header("Location:/campus-eats/program-page.php");
?>