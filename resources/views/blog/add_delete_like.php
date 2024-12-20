<?php
    session_start();
    require_once('../../../connectdb/connectiondb.php');
    $idUser = isset($_SESSION['idUser']) ? $_SESSION['idUser'] : 0;
    $idArticle = isset($_SESSION['idArticle']) ? $_SESSION['idArticle'] : 0;

    
    $getLikes = mysqli_query($conn, "SELECT * FROM likes WHERE idUser = $idUser");
    $userLike = mysqli_num_rows($getLikes);

    if($userLike == 0) {
        $insertLike = mysqli_prepare($conn, "INSERT INTO likes(idUser, idArticle) VALUES(?,?)");
    
        mysqli_stmt_bind_param($insertLike, 'ii', $idUser, $idArticle);
    
        if(mysqli_stmt_execute($insertLike)) {
            header('location: blog.php');
        }
    } else {
        echo "like is exist";
        $deleteLike = mysqli_prepare($conn, "DELETE FROM likes WHERE idUser = ?");
    
        mysqli_stmt_bind_param($deleteLike, 'i', $idUser);
    
        if(mysqli_stmt_execute($deleteLike)) {
            header('location: blog.php');
        }
    }
?>