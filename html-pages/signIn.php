<?php
    session_start();

    if ($_SESSION['user']){
        header('Location: ../index.php');
    }

    $connection = mysqli_connect('127.0.0.1', 'mysql', 'mysql', 'tasks_page_db');

    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
    $password = md5($password);

    $check_user = mysqli_query($connection, "SELECT * FROM `register` WHERE `login` = '$login' and `password` = '$password'");

    if(mysqli_num_rows($check_user) > 0){

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = ['login' => $user['login'], 'name' => $user['name'], 'user_id' => $user['user_id']];
        header('Location: ../index.php');
    }
    else{
        $_SESSION['message'] = 'wrong login or password';
        header('Location: signIn_page.php');
    }
