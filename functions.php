<?php
function getQuestions($file = "questions.json") {
    $fileName = $file;
    $f = fopen($fileName, 'r');
    $fileContent = fread($f, filesize($fileName));
    fclose($f);
    return json_decode($fileContent);
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

function removeQuestion($data, $id) {
    $resultArray = [];
    foreach ($data as $question) {
        if ($question->id != $id) {
            $resultArray[] = $question;
        }
    }
}
?>