<h1>Node.js Quiz</h1>

<?php

include '../connection.php';

$sql = 'SELECT * FROM node_js_questions';
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
            <input type=\"radio\" class=\"hide answer-input\" id=\"nodeA$d->questionId\" name=\"node$d->questionId\">
            <label for=\"nodeA$d->questionId\" class=\"btn waves-effect waves-light answer-label\">a</label>
            <input type=\"radio\" class=\"hide answer-input\" id=\"nodeB$d->questionId\" name=\"node$d->questionId\">
            <label for=\"nodeB$d->questionId\" class=\"btn waves-effect waves-light answer-label\">b</label>
            <input type=\"radio\" class=\"hide answer-input\" id=\"nodeC$d->questionId\" name=\"node$d->questionId\">
            <label for=\"nodeC$d->questionId\" class=\"btn waves-effect waves-light answer-label\">c</label>
            <input type=\"radio\" class=\"hide answer-input\" id=\"nodeD$d->questionId\" name=\"node$d->questionId\">
            <label for=\"nodeD$d->questionId\" class=\"btn waves-effect waves-light answer-label\">d</label>
        </div>
    </div>";
}

?>