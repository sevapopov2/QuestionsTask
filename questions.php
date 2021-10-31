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
    <pre>
        <?php
        if (array_key_exists('q', $_GET)) {
            echo getQuestion($_GET['q]']);
        }
        echo json_encode(getQuestion("1"), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        ?>
    </pre>
    <form action="questionCheck.php" method="post">
        <label for="answer">Введите ответ</label>
        <input type="text" id="answer" name="answer">
        <br>
        <input type="submit" value="Ответить">
    </form>
</body>
</html>