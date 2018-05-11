<h1>PHP Quiz</h1>

<?php

include '../connection.php';

$sql = 'SELECT * FROM php_questions';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll();

foreach ($data as $d) {
    echo "<div class=\"card\">
        <div class=\"card-content\">
            <span class=\"card-title\">$d->questionId</span>
            <p>$d->question</p>
            <div class=\"flow-text mt-2\">Choices:</div>
            <ul>
                <li>A. $d->ans_a</li>
                <li>B. $d->ans_b</li>
                <li>C. $d->ans_c</li>
                <li>D. $d->ans_d</li>
            </ul>
        </div>
        <div class=\"card-action\">
            <input type=\"radio\" class=\"hide answer-input\" id=\"phpA$d->questionId\" name=\"php$d->questionId\">
            <label for=\"phpA$d->questionId\" class=\"btn waves-effect waves-light answer-label\">a</label>
            <input type=\"radio\" class=\"hide answer-input\" id=\"phpB$d->questionId\" name=\"php$d->questionId\">
            <label for=\"phpB$d->questionId\" class=\"btn waves-effect waves-light answer-label\">b</label>
            <input type=\"radio\" class=\"hide answer-input\" id=\"phpC$d->questionId\" name=\"php$d->questionId\">
            <label for=\"phpC$d->questionId\" class=\"btn waves-effect waves-light answer-label\">c</label>
            <input type=\"radio\" class=\"hide answer-input\" id=\"phpD$d->questionId\" name=\"php$d->questionId\">
            <label for=\"phpD$d->questionId\" class=\"btn waves-effect waves-light answer-label\">d</label>
        </div>
    </div>";
}

?>