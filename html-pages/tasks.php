<?php

/*
 * 1.id
 * 2.Заголовок
 * 3.Опис
 * 4.Розділ
 * 5.Дата виконання
 * 6.Є важливим
 *
 *
 */
$connection = mysqli_connect('127.0.0.1', 'mysql', 'mysql', 'tasks_page_db');

if($connection == false){
    echo 'Проблема підключення до бази данних<br>';
    echo mysqli_connect_errno();
    exit();
}
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
<body>
<div class="wrapper">
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
                    <a class="header-nav__link" href="../index.html">Головна</a>
                    <a class="header-nav__link" href="html-pages/tasks.html">Задачі</a>
                    <a class="header-nav__link" href="#">Статистика</a>
                    <a class="header-nav__link" href="#">Вхід</a>
                </div>
            </div>
        </div>
    </header>
    <div class="main_block">

        <div class="day_sorting_block">
            <div class="sort_list font">
                <h3 class="sort_title">Задачі на:</h3>
                <ul class="sort elements">
                    <li class="sort_element">День</li>
                    <li class="sort_element">Тиждень</li>
                    <li class="sort_element">Місяць</li>
                </ul>
            </div>
        </div>
        <div class="table_block">
            <div class="table">
                <div class="table_title_block">
                    <div class="table_column_title"><span class="font table_title">Планується</span></div>
                    <div class="table_column_title"><span class="font table_title">В процесі</span></div>
                    <div class="table_column_title"><span class="font table_title">Виконано</span></div>
                </div>
                <div class="table_elements_block">
                    <div class="table_element" id="planning">
                        <div class="plus" onclick="addTaskToPlanning()">
                            <a href="http://kursova.com/html-pages/tasks.php?task-date=&submit_button=Отправить#eclipse" class="plus_creation_window_link"></a>
                        </div>
                    </div>
                    <div class="table_element" id="inProgres">
                        <div class="plus" onclick="addTaskToInProgres()">
                            <a href="http://kursova.com/html-pages/tasks.php?task-date=&submit_button=Отправить#eclipse" class="plus_creation_window_link"></a>
                        </div>
                    </div>
                    <div class="table_element" id="done">
                        <div class="task_block">
                            <div class="task_block_top_part">
                                <p class="task_block_title font"><a href="http://kursova.com/html-pages/tasks.php?task-date=&submit_button=Отправить#eclipse" class="creation_window_link">To do something</a></p>
                                <div class="delete_button_block">
                                    <div class="plus delete_button" onclick="deleteTask();"></div>
                                </div>
                            </div>
                            <div class="task_block_bottom_part">
                                <p class="task_block_text font">I have to do something, or not. Ok I will play minecraft anyway</p>
                                <div class="detail_button_block">
                                    <div class="details_button">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="plus" onclick="addTaskToDone()">
                            <a href="http://kursova.com/html-pages/tasks.php?task-date=&submit_button=Отправить#eclipse" class="plus_creation_window_link"></a>
                        </div>
                    </div>
                </div>
                <script>
                function set_section_id_1(){
                var section_id = <?php echo json_encode("1", JSON_HEX_TAG); ?>;
                }

                function set_section_id_2(){
                var section_id = <?php echo json_encode("2", JSON_HEX_TAG); ?>;
                }

                function set_section_id_3(){
                var section_id = <?php echo json_encode("3", JSON_HEX_TAG); ?>;
                }
                </script>
            </div>
        </div>
    </div>
    <div id="eclipse">
        <div id="window">
            <form class="form font" method="POST" action="tasks.php">
                <div class="form_group"> <p class="form_text">Назва задачі:</p>
                    <input type="text" name="title" class="form_input" placeholder=" ">
                </div>
                <div class="form_group">
                    <label class="form_label_large"><div class="message_settings"><p class="form_text">Детальніше:</p></div>
                        <textarea class="form_input_large" rows="10" name="description"></textarea></label>
                </div>
                <div class="selection_block">
                    <div class="date_block">
                        <input type="date" class="date_input" name="task_date">
                    </div>
                    <input type="checkbox" class="important_option" name="is_important_option" value="important">
                    <p class="font">Важливо</p>
                </div>
                <br>
                <div class="submit_block">
                    <input type="submit" name="submit_button" value="Відправити" class="submit_button">
                </div>
            </form>
            <?php
            $title = $_POST['title'];
            $description = $_POST['description'];
            $task_date = $_POST['task_date'];

            if(isset($_POST['is_important_option'])){
                $is_important = 1;
            }else{
                $is_important = 0;
            }

            $insertion = mysqli_query($connection, "INSERT INTO `task_blocks` (`Розділ_id`, `Заголовок`, `Опис`, `Дата виконання`, `Є важливим`) VALUES (1, '$title', '$description', '$task_date', '$is_important')");
            ?>
            <div class="close_button_block">
                <a href="tasks.php" class="close font">Закрити</a>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="footer-text">Info</div>
            <div class="footer-text">Contact</div>
        </div>
    </footer>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/dynamic_table.js"></script>
</body>
</html>
