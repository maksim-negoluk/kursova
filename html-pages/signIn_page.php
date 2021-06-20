<?php
    session_start();
?>
<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/tasks_style.css">
    <link rel="stylesheet" type="text/css" href="../css/registration.css">
</head>
<body>
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
                <?
                if ($_SESSION['user']){
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
<div class="block">
    <div class="block_contact">
        <?//авторизація ?>
        <form class="form" action="signIn.php" method="post">
            <div class="form_group">
                <input type="text" name="login" class="form_input" placeholder=" ">
                <label class="form_label">Login</label>
            </div>
            <div class="form_group">
                <input type="password" name="password" class="form_input" placeholder=" ">
                <label class="form_label">Password</label>
            </div>
            <button class="form_button" type="submit"><span class="submit_text">enter</span></button>
            <a href="signUp_page.php" class="form_text_link">Dont have account yet?</a>
            <?php
            if($_SESSION['message']){
                echo '<p class="form_text_paragraph">' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);
            ?>
        </form>
    </div>
</div>
</body>
</html>