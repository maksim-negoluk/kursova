<?php
$connection = mysqli_connect('127.0.0.1', 'mysql', 'mysql', 'tasks_page_db');

if($connection == false){
    echo 'Проблема підключення до бази данних<br>';
    echo mysqli_connect_errno();
    exit();
}

    $id = $_GET['id'];
    mysqli_query($connection, "DELETE FROM `task_blocks` WHERE `task_blocks`.`id` = '$id'");

    header('Location: /html-pages/tasks.php');