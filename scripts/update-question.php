<?php
$questionId = $_POST["question_id"];
$question = $_POST["question"];
$answers = $_POST["answers"];
$correctAnswer = $_POST["correct_answer"];
$pictureURL = $_POST["picture_url"];
$videoURL = $_POST["video_url"];
$reason = $_POST["reason"];
include 'db.php';
if ($pictureURL == 'noupdate') {
    $pictureURL = $c->query("SELECT * FROM questions WHERE id='" . $questionId . "'")->fetch_assoc()["picture_url"];
}
if ($videoURL == 'noupdate') {
    $videoURL = $c->query("SELECT * FROM questions WHERE id='" . $questionId . "'")->fetch_assoc()["video_url"];
}
if ($c->query("UPDATE questions SET question='" . $question . "', answers='" . $answers . "', correct_answer='" . $correctAnswer . "', reason='" . $reason . "', picture_url='" . $pictureURL . "', video_url='" . $videoURL . "' WHERE id='" . $questionId . "'")) {
    echo 0;
} else {
    echo -1;
}