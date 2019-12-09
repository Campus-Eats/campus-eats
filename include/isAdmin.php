<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    $isAdmin = false;
    if(isset($_SESSION)) {
        if(isset($_SESSION['isAdmin'])){ 
            $isAdmin = true;
        }
    }
?>