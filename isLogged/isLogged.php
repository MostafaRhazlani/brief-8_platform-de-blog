<?php

    session_start();
    if(!isset($_SESSION['user'])) {
        header('location:/resources/views/blog/blog.php');
    }


?>