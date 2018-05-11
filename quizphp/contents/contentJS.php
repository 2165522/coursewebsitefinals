<h1>JavaScript Quiz</h1>

<?php

include '../connection.php';

$sql = 'SELECT * FROM js_questions';
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
            <input type=\"radio\" class=\"hide answer-input\" id=\"jsA$d->questionId\" name=\"js$d->questionId\">
            <label for=\"jsA$d->questionId\" class=\"btn waves-effect waves-light answer-label\">a</label>
            <input type=\"radio\" class=\"hide answer-input\" id=\"jsB$d->questionId\" name=\"js$d->questionId\">
            <label for=\"jsB$d->questionId\" class=\"btn waves-effect waves-light answer-label\">b</label>
            <input type=\"radio\" class=\"hide answer-input\" id=\"jsC$d->questionId\" name=\"js$d->questionId\">
            <label for=\"jsC$d->questionId\" class=\"btn waves-effect waves-light answer-label\">c</label>
            <input type=\"radio\" class=\"hide answer-input\" id=\"jsD$d->questionId\" name=\"js$d->questionId\">
            <label for=\"jsD$d->questionId\" class=\"btn waves-effect waves-light answer-label\">d</label>
        </div>
    </div>";
}

?>