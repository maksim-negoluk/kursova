<?php
$connection = mysqli_connect('127.0.0.1', 'mysql', 'mysql', 'tasks_page_db');

if($connection == false){
    echo 'Проблема підключення до бази данних<br>';
    echo mysqli_connect_errno();
    exit();
}

    $section_id = 1;
    $title = $_POST['title'];
    $description = $_POST['description'];
    $task_date = $_POST['task_date'];

    if(isset($_POST['is_important_option'])){
        $is_important = 1;
    }else{
        $is_important = 0;
    }

    $insertion = mysqli_query($connection, "INSERT INTO `task_blocks` (`Розділ_id`, `Заголовок`, `Опис`, `Дата виконання`, `Є важливим`) VALUES ('$section_id', '$title', '$description', '$task_date', '$is_important')");

    header('Location: /html-pages/tasks.php');