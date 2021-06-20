<?php
$connection = mysqli_connect('127.0.0.1', 'mysql', 'mysql', 'tasks_page_db');

if($connection == false){
    echo 'Проблема підключення до бази данних<br>';
    echo mysqli_connect_errno();
    exit();
}

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $task_date = $_POST['task_date'];

    $insertion = mysqli_query($connection, "UPDATE `task_blocks` SET `Заголовок` = '$title', `Опис` = '$description', `Дата виконання` = '$task_date' WHERE `task_blocks`.`id` = '$id'");

    header('Location: /html-pages/tasks.php');
?>