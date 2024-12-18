<?php
    session_start();
    require_once('../../../connectdb/connectiondb.php');

    // get all names in input
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';
    $idCategory = isset($_POST['idCategory']) ? $_POST['idCategory'] : '';
    $image = isset($_POST['image']) ? $_POST['image'] : '';
    $idUser = isset($_SESSION['user']) ? $_SESSION['user']['id'] : 0;

    // insert data of article
    $insertArticle = mysqli_prepare($conn, "INSERT INTO articles(title, content, image, idUser) VALUES(?,?,?,?)");
    mysqli_stmt_bind_param($insertArticle, "sssi", $title, $content, $image, $idUser);
    if(mysqli_stmt_execute($insertArticle)) {

        // get id last article added
        $getidArticle = mysqli_query($conn, "SELECT id FROM articles ORDER BY id DESC LIMIT 1");
        $idArticle = mysqli_fetch_assoc($getidArticle);
    
        // insert id article and category in table tags
        $insertTag = mysqli_prepare($conn, "INSERT INTO tags(idArticle, idCategory) VALUES(?,?)");
        mysqli_stmt_bind_param($insertTag, "ii", $idArticle['id'], $idCategory);
        if(mysqli_stmt_execute($insertTag)) {
            header('location: blog.php');
        }
    }
?>