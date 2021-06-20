<?php
$connection = mysqli_connect('127.0.0.1', 'mysql', 'mysql', 'tasks_page_db');

if($connection == false){
    echo 'Проблема підключення до бази данних<br>';
    echo mysqli_connect_errno();
    exit();
}

    $product_id = $_GET['id'];
    $task_block_done = mysqli_query($connection, "SELECT * FROM `task_blocks` WHERE `task_blocks`.`id` = '$product_id'");
    $task_block_done = mysqli_fetch_assoc($task_block_done);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задачі</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/tasks_style.css">
</head>
<header class="header">
    <div class="container">
        <div class="header-inner">
            <div class="header-item">
                <div class="header-logo">
                    <img src="../img/Notepad_Icon.png" alt="">
                </div>
                <div class="header-title">Logo</div>
            </div>
            <div class="header-nav">
                <a class="header-nav__link" href="../index.php">Main page</a>
                <a class="header-nav__link" href="tasks.php">Tasks</a>
                <a class="header-nav__link" href="#">Notifications</a>
                <a class="header-nav__link" href="login.html">Exit</a>
            </div>
        </div>
    </div>
</header>
<div style="height: 620px"></div>
<div id="window">
    <form class="form font" method="POST" action="redact.php">
        <div class="form_group"> <p class="form_text">Task name:</p>
            <input type="hidden" name="id" value="<?= $task_block_done['id']?>">
            <input type="text" name="title" class="form_input" placeholder=" " value="<?= $task_block_done['title']?>">
        </div>
        <div class="form_group">
            <label class="form_label_large"><div class="message_settings"><p class="form_text">Detailed:</p></div>
                <textarea class="form_input_large" rows="10" name="description" value="<?= $task_block_done['description']?>"></textarea></label>
        </div>
        <div class="selection_block">
            <div class="date_block">
                <input type="date" class="date_input" name="task_date" value="<?= $task_block_done['task_date']?>">
            </div>
            <input type="checkbox" class="important_option" name="is_important_option" value="important">
            <p class="font">important</p>
        </div>
        <br>
        <div class="submit_block">
            <input type="submit" name="submit_button" value="Send" class="submit_button">
        </div>
        <div class="close_button_block">
            <a href="tasks.php" class="close font">Close</a>
        </div>
    </form>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer-text">Info</div>
        <div class="footer-text">Contact</div>
    </div>
</footer>
</html>