<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Site</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header-inner">
            <div class="header-item">
                <div class="header-logo">
                    <img src="img/note.png" alt="" class="logo_picture">
                </div>
                <div class="header-title">Reminder</div>
            </div>
            <div class="header-nav">
                <a class="header-nav__link" href="index.php">Main page</a>
                <a class="header-nav__link" href="html-pages/tasks.php">Tasks</a>
                <a class="header-nav__link" href="html-pages/notifications.php">Notifications</a>
                <?if ($_SESSION['user']){
                    $message = 'Exit';
                    $link = 'html-pages/exit.php';
                }
                else{
                    $message = 'Login';
                    $link = 'html-pages/signIn_page.php';
                }?>
                <a class="header-nav__link" href="<?= $link ?>"><span><?= $message ?></span></a>
            </div>
        </div>
    </div>
</header>
<section class="upper-content">
    <div class="container">
        <div class="main-picture">
            <img src="img/manstairs.jpg" alt="picture">
        </div>
    </div>
</section>
<section class="main-content">
    <div class="container">
        <div class="main-block">
            <div class="main-block__title">Make your life better</div>
            <div class="main-block__content">
                <aside class="block-content__box">
                    <div class="box-title"> «Do not wait, the time will never be« just right».</div>
                    <div class="box-subtitle"> <br>«Setting goals is the first step in turning the invisible into the visible»</br>
                        <br>«Small deeds done are better than great deeds planned»</br>
                        <br> </br>
                        <br></br></div>
                </aside>
                <aside class="block-content__box">
                    <img src="img/plans 1.png" alt="picture">
                </aside>
            </div>
        </div>
        <div class="main-block">
            <div class="main-block__title">Never give up!</div>
            <div class="main-block__content">
                <aside class="block-content__box">
                    <img src="img/man.jpg" alt="picture">
                </aside>
                <aside class="block-content__box">
                    <div class="box-title">You must know that you can do it. </div>
                    <div class="box-subtitle"><br>Success is 99% failure</br>
                        <br> If you cannot do great things, do small things in a great way</br>
                        <br> You are never too old to set another goal or to dream a new dream</br>
                    </div>
                </aside>
            </div>
        </div>

</section>

<section class="try-button">
    <div class="container">
        <div class="block-button">
            <div class="block-button__title"></div>
            <button class="custom_button" href="html-pages/signUp_page.php">Try</button>
            <div class="block-button__custom-button"></div>
        </div>
    </div>
</section>
<div class="section-main">
    <div class="programs">

        <footer class="footer">
            <div class="container">
                <div class="footer-text">Info</div>
                <div class="footer-text">Contact</div>
            </div>
        </footer>
    </div>
</body>
</html>