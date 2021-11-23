<?php
function getQuestions($file = "questions.json") {
    $fileName = $file;
    $f = fopen($fileName, 'r');
    $fileContent = fread($f, filesize($fileName));
    fclose($f);
    return json_decode($fileContent);
}


function getQuestionText($id) {
    return getQuestion($id)->question;
}

function checkQuestion($id, $answer) {
    return is_array(getQuestion($id)->answer)
    ? in_array($answer, getQuestion($id)->answer)
    : getQuestion($id)->answer == $answer;
}
?>