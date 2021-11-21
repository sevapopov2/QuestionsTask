<?php
function getQuestions() {
    $fileName = "questions.json";
    $f = fopen($fileName, 'r');
    $fileContent = fread($f, filesize($fileName));
    fclose($f);
    return json_decode($fileContent, true);
}

function getQuestion($id) {
    foreach (getQuestions() as $question) {
        if ($question->id == $id) {
            return $question;
        }
    }
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