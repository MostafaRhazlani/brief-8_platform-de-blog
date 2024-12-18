<?php

    session_start();
    if(!isset($_SESSION['user'])) {
        header('location:/resources/views/auth/login.php');
    }


?>