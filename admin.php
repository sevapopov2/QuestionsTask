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
                <li>{$question->question}</li>
                <button class='delete' id='{$question->id}'>Удалить вопрос</button>";
        }
        ?>
    </ul>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(".delete").click(function() {
        var clickedButton = $(this);
        var clickedButtonID = clickedButton.attr('id');
        console.log("clickedButtonJqueryObject", clickedButton);
        $.get("removeQuestion.php", {
            id: clickedButtonID
        }, function(data) {
            console.log(clickedButtonID);
            console.log(data);
        });
    })
</script>
</html>