<?php
$connection = mysqli_connect('127.0.0.1', 'mysql', 'mysql', 'tasks_page_db');

if($connection == false){
    echo 'Проблема підключення до бази данних<br>';
    echo mysqli_connect_errno();
    exit();
}

$id = $_GET['id'];
$section_id = $_GET['section_id'];

if($section_id <= 2 && $section_id >= 0){
    $section_id++;
    mysqli_query($connection, "UPDATE `task_blocks` SET `Розділ_id`=$section_id WHERE `task_blocks`.`id` = '$id'");
}

header('Location: /html-pages/tasks.php');