<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Список вопросов</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Список вопросов</h1>
        <ul>
            <?php
            foreach (getQuestions() as $question) {
                echo "<li>{$question->id}</li>
                <li>{$question->question}</li>";
            }
            ?>
        </ul>
    </body>
</html>