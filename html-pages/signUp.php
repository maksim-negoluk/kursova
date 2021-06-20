<?php
    session_start();

    $connection = mysqli_connect('127.0.0.1', 'mysql', 'mysql', 'tasks_page_db');

    if ($_SESSION['user']){
        header('Location: ../index.php');
    }

	$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
	$password = md5($password);
	$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);

    $check_user = mysqli_query($connection, "SELECT * FROM `register` WHERE `login` = '$login'");

    if(mysqli_num_rows($check_user) > 0){

        $_SESSION['message'] = 'user with this username already exists';
        header('Location: signUp_page.php');
    }
    else{
        $insertion = mysqli_query($connection, "INSERT INTO `register` (`login`,`password`,`name`) VALUES ('$login', '$password', '$name')");
        $_SESSION['message'] = 'registration success';
        header('Location: signIn_page.php');
    }

    unset($check_user);
