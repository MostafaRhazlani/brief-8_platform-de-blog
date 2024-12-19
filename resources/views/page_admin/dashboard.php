<?php
    session_start();
    if(!isset($_SESSION['user']) || $_SESSION['user']['idRole'] != 1) {
        header('location:/resources/views/blog/blog.php');
    }
?>

<?php include('../layout/_HEAD.php') ?>
<?php include('../layout/_SIDEBAR.php') ?>

<?php include('../layout/_FOOTER.php') ?>