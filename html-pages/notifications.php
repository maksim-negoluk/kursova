<?php
$connection = mysqli_connect('127.0.0.1', 'mysql', 'mysql', 'tasks_page_db');

if($connection == false){
    echo 'Проблема підключення до бази данних<br>';
    echo mysqli_connect_errno();
    exit();
}

session_start();

$user_id = $_SESSION['user']['user_id'];

date_default_timezone_set('Europe/Kiev');
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
                <a class="header-nav__link" href="notifications.php">Notifications</a>
                <?if ($_SESSION['user']){
                    $message = 'Exit';
                    $link = 'exit.php';
                }
                else{
                    $message = 'Login';
                    $link = 'signIn_page.php';
                }?>
                <a class="header-nav__link" href="<?= $link ?>"><span><?= $message ?></span></a>
            </div>
        </div>
    </div>
</header>
<div class="notification_block">
    <?php
    $counter = 0;
    $task_block_planning = mysqli_query($connection, "SELECT * FROM `task_blocks` WHERE `user_id` = '$user_id'");
    $task_block_planning = mysqli_fetch_all($task_block_planning);
    foreach ($task_block_planning as $task) {
        $date_differance = date("Y-m-d") - strtotime($task[4]);

        $years = ceil($date_differance / (365*60*60*24));
        $months = ceil(($date_differance - $years * 365*60*60*24) / (30*60*60*24));
        $days = ceil(($date_differance - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24)) + 1;

        if($days <= 1 && $days >= -1){
            $counter++;
    ?>
    <div class="task_block task_block_notification">
        <div class="task_block_top_part">
            <p class="task_block_title font"><?= $task[2] ?></p>
        </div>
        <div class="task_block_bottom_part">
            <p class="task_block_text font"><?= $task[3] ?></p>
            <div class="table_date_block task_block_notification">
                <p class="date"><?= $task[4] ?></p>
            </div>
        </div>
    </div>
    <?php
        }
    }
    if($counter == 0){
        ?>
        <div class="no_items_block">You dont have any set tasks tomorrow</div>
    <?
    }
                            ?>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer-text">Info</div>
        <div class="footer-text">Contact</div>
    </div>
</footer>
</html>