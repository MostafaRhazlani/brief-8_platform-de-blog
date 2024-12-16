<?php
    session_start();
    require_once('../../../connectdb/connectiondb.php');

    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';

    $countErrors = array();

    // check if input username is empty
    if(empty($username)) {
        $countErrors[] = 1;
        $_SESSION['emptyUsername'] = 'username field is required!';
        header('location:register.php');
    }

    // check if input email is empty
    if(empty($email)) {
        $countErrors[] = 1;
        $_SESSION['emptyEmail'] = 'email field is required!';
    }

    // check if form email is valid
    if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $countErrors[] = 1;
        $_SESSION['invalidEmail'] = 'form of email is invalid!';
    }

    // check if input password is empty
    if(empty($password)) {
        $countErrors[] = 1;
        $_SESSION['emptyPassword'] = 'password field is required!';
    }

    // check if user confirm password is empty
    if(empty($confirm_password)) {
        $countErrors[] = 1;
        $_SESSION['emptyConfirmPassword'] = 'confirm password field is required!';
    }
    
    // check if password and confirm password is same
    if($password != $confirm_password) {
        $countErrors[] = 1;
        $_SESSION['notSamePassword'] = 'password is not correct!';
    }

    if(count($countErrors) == 0) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $idRole = 2;
        $resultQuery = mysqli_prepare($conn, "INSERT INTO users(username, email, password, idRole) VALUES(?,?,?,?)");

        mysqli_stmt_bind_param($resultQuery, "sssi", $username, $email, $hashedPassword, $idRole);

        if(mysqli_stmt_execute($resultQuery)) {
            header('location: register.php');
        } else {
            echo "error";
        }
    }
?>