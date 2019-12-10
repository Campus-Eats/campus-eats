<?php
// Eileen's Sheridan Server db 
// $dsn="mysql:host=localhost;dbname=santiaei_campus_eats;charset=utf8mb4";

// Use this db for your local host if your db name is 'CampusEats'
$dsn="mysql:host=localhost;dbname=CampusEats;charset=utf8mb4";

// use your db username and password 
// $dbusername="CampusEats";
// $dbpassword="GA47Y0;U}?kQ";

$dbusername="santiaei_admin";
$dbpassword="GA47Y0;U}?kQ";

$pdo=new PDO($dsn, $dbusername,$dbpassword);

?>