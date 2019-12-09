<?php
session_start();

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
include("include/connect.php");

$stmt = $pdo->prepare("INSERT INTO `users` (`userID`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES (NULL, '$firstname', '$lastname', '$email', '$password', '$role')");

$stmt->execute();

// header("Location:login.php");

echo('{"success":"true"}');

?>