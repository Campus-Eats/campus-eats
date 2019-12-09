<?php
    // checkes to see if program user (Admin) is logged in/ in session
    if(!isset($_SESSION)) {
        session_start();
    }
    // $isAdmin is initialized as false 
    $isAdmin = false;
    if(isset($_SESSION['programID'])) {
        $user_program_admin = $_SESSION['programID'];
        
        include("connect.php");
        $_stmt = $pdo->prepare("SELECT * FROM `foodprograms` WHERE `programID`= $user_program_admin");    
        $_stmt->execute();
        $_row= $_stmt->fetch();
    }
?>