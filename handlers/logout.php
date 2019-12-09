<?php
    session_start();
    session_destroy();
    header('Location: /campus-eats/home.php');
?>