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
    <form action="questionCheck.php" method="post">
        <label for="answer">Введите ответ</label>
        <input type="text" id="answer" name="answer">
        <br>
        <input type="submit" value="Ответить">
    </form>
</body>
</html>