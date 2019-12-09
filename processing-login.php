<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

include("include/connect.php");

$stmt = $pdo->prepare("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' ");

$stmt->execute();

$row = $stmt->fetch();

if ($row){
    //lset session variables
    $_SESSION['id'] = $row['userID'];
    if($row['role'] == 'admin') {
        $_SESSION['isAdmin'] = true;
    };
    header("Location:home.php");
}else{
    echo("Please try again.");
};

?>