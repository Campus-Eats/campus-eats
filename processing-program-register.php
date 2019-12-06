<?php
session_start();

$programName = $_POST['programName'];
$description = $_POST['description'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$addressDetails = $_POST['addressDetails'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$hours = $_POST['hours'];
// $uploaddir = 'assets/';
// $image = $uploaddir.basename($_FILES['image']['name']);

// echo($image);

include("include/connect.php");

$stmt = $pdo->prepare("INSERT INTO `foodprograms` ( `programName`, `description`, `email`, `password`, `address`, `addressDetails`, `city`, `phone`, `hours`) VALUES ('$programName', :description, '$email', '$password', :address, :addressDetails, '$city', :phone, :hours)");

$stmt->execute(array(':description' => $description, ':address' => $address, ':addressDetails' => $addressDetails, ':phone' => $phone, ':hours' => $hours));

// echo('{"success":"true"}');

var_dump($stmt);
// header("Location:login.php");
​
?>
