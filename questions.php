<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Вопросы</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    include 'functions.php';
    ?>
    <h1>Викторина</h1>
    <form method="post" action="questionCheck.php?id=<?=$_GET['q']?>">
    <?php
    if (array_key_exists('q', $_GET)) {
        echo getQuestionText($_GET['q']);
    }
    ?>
    <br>
        <label for="answer">Введите ответ</label>
        <br>
        <input type="text" id="answer" name="answer">
        <br>
        <input type="submit" value="Ответить">
    </form>
</body>
</html>