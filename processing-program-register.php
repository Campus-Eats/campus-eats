<?php
session_start();

$programName = $_POST['programName'];
$email = $_POST['email'];
$password = $_POST['password'];
$streetAddress = $_POST['streetAddress'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$hours = $_POST['hours'];

include("include/connect.php");

$stmt = $pdo->prepare("INSERT INTO `foodprograms` (`programID`, `programName`, `email`, `password`,`streetAddress`, `city`, `phone`, `hours`) VALUES (NULL, '$programName', '$email', '$password', :streetAddress, '$city', :phone, :hours)");

$stmt->execute(array(':hours' => $hours, ':phone' => $phone, ':streetAddress' => $streetAddress));

header("Location:login.php");

?>