<?php
function getQuestions() {
    $fileName = "questions.json";
    $f = fopen($fileName, 'r');
    $fileContent = fread($f, filesize($fileName));
    fclose($f);
    return json_decode($fileContent, true);
}

function getQuestion($id) {
    return getQuestions()[$id]['question'];
}