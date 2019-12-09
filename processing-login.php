<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

include("include/connect.php");

$stmt = $pdo->prepare("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' ");

$stmt->execute();

$row = $stmt->fetch();

//found user
if ($row){
    //set session variables
    $_SESSION['userID'] = $row['userID'];
    if($row['role'] == 'admin') {
        $_SESSION['isAdmin'] = true;
    };
    //redirect to homepage
    header("Location:home.php");
}else{
    echo("Please try again.");
};

?>