<?php session_start();
include("include/connect.php");

// error_reporting(E_ALL ^ E_NOTICE);

$programName = $_POST["programName"];
$description = $_POST["description"];
$address = $_POST["address"];
$addressDetails = $_POST["addressDetails"];
$city = $_POST["city"];
$phone = $_POST["phone"];
$hours = $_POST["hours"];
$userID = $_SESSION['userID'];

$uploaddir = 'assets/';
$image = $uploaddir . basename($_FILES['image']['name']);



$stmt = $pdo->prepare("INSERT INTO `foodprograms`(`programName`,`description`,`address`,`addressDetails`,`city`,`phone`,`hours`,`image`, `userID`) VALUES ( ? , ? , ? , ? , ? , ? , ? , ? , ?);");
$stmt->execute([$programName,$description,$address,$addressDetails,$city,$phone,$hours,$image, $userID]);

// var_dump($_POST);

// var_dump($stmt->errorInfo());



if (move_uploaded_file($_FILES['image']['tmp_name'], $image)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "File upload failed.\n";
}

// echo 'Here is some more debugging info:';
// print_r($_FILES);


header("Location:my-programs.php");

?>


