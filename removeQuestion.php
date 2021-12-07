<?php
include 'functions.php';

echo "Remove the question with id" . $_GET['id'];
removeQuestion(getQuestions(), 1);