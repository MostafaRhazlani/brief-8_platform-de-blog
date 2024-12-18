<?php

    session_start();
    if(!isset($_SESSION['token'])) {
        header('location:/resources/views/auth/login.php');
    }


?>