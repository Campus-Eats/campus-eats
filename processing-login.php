<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

include("include/connect.php");

$stmt = $pdo->prepare("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' ");

$stmt->execute();

$row = $stmt->fetch();

if ($row['email']==$email && $row['password']==$password){
    header("Location:home.php");
}else{
    echo("Please try again.");
};

?>