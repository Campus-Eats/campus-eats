<?php
session_start();

//receive the information from the contact form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

include("include/connect.php");

$stmt = $pdo->prepare("INSERT INTO `contact` (`contactID`, `name`, `email`, `message`) VALUES (NULL, '$name', '$email', :message)");

$stmt->execute(array(':message' => $message));

echo('{"success":"true"}');