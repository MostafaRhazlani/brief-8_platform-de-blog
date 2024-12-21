<?php

    session_start();
    require_once('../../../connectdb/connectiondb.php');
    $idUser = isset($_SESSION['user']) ? $_SESSION['user']['id'] : 0;
    $idArticle = isset($_POST['idArticle']) ? $_POST['idArticle'] : 0;

    $getLikes = mysqli_query($conn, "SELECT * FROM likes WHERE idUser = $idUser AND idArticle = $idArticle");
    $userLike = mysqli_num_rows($getLikes);

    if($userLike == 0) {
        $insertLike = mysqli_prepare($conn, "INSERT INTO likes(idUser, idArticle) VALUES(?,?)");
    
        mysqli_stmt_bind_param($insertLike, 'ii', $idUser, $idArticle);
    
        if(mysqli_stmt_execute($insertLike)) {
            header('location: blog.php');
        }
    } else {
        echo "like is exist";
        $deleteLike = mysqli_prepare($conn, "DELETE FROM likes WHERE idUser = ? AND idArticle = ?");
    
        mysqli_stmt_bind_param($deleteLike, 'ii', $idUser, $idArticle);
    
        if(mysqli_stmt_execute($deleteLike)) {
            header('location: blog.php');
        }
    }
?>