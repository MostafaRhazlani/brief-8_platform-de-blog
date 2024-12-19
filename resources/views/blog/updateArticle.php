<?php
    session_start();
    require_once('../../../connectdb/connectiondb.php');

    // get all names in input

    if(isset($_SESSION['idArticle'])) {
        $idArticle = $_SESSION['idArticle'];
        $title = isset($_POST['title']) ? $_POST['title'] : '';
        $content = isset($_POST['content']) ? $_POST['content'] : '';
        $idCategory = isset($_POST['idCategory']) ? $_POST['idCategory'] : [];
        $image = isset($_POST['image']) ? $_POST['image'] : '';
        
        $updateArticle = mysqli_prepare($conn, "UPDATE articles SET title = ?, content = ?, image = ? WHERE id = ?");
        mysqli_stmt_bind_param($updateArticle, "sssi", $title, $content, $image, $idArticle);
        if(mysqli_stmt_execute($updateArticle)) {

            header('location: blog.php');
        }
    }
?>