<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Результат</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Результат</h1>
        <?php
        if ($_POST['answer'] == "Всеволод") {
            echo "Правильный ответ! Молодец!";
        } else {
            echo "К сожалению, вы ошиблись.";
            ?>
            <form action="questions.php" method="post">
                <input type="submit" value="Начните сначала!">
            </form>
            <?php
        }
        ?>
    </body>
</html>