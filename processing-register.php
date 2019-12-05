<?php
session_start();

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

include("include/connect.php");

$stmt = $pdo->prepare("INSERT INTO `users` (`userID`, `firstname`, `lastname`, `email`, `password`) VALUES (NULL, '$firstname', '$lastname', '$email', '$password')");

$stmt->execute();

header("Location:login.php");

?>