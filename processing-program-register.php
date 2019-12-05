<?php
session_start();

$programName = $_POST['programName'];
$email = $_POST['email'];
$password = $_POST['password'];
$streetAddress = $_POST['streetAddress'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$hours = $_POST['hours'];
$filename = $_FILES['image']['name'];

include("include/connect.php");

$uploadF = '../images/';
$uploadfile = $uploadF . basename($filename);

if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible image file missing!\n";
};

header("Location:login.php");

?>