<? php include 'database.php';>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>PHP Quizzer</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>PHP Quizzer</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>Test Your PHP Knowledge</h2>
            <p>This is a multiple choice quiz to test your knowledgeof PHP</p>

            <ul>
                <li><strong>Number of Questions: 5</strong></li>
                <li><strong>Type:</strong>Multiple Choice</li>
                <li><strong>Estimated time:</strong> 4mins</li>
            </ul>
            <a href="question.php?n=1" class="start">Start Quiz</a>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy; 2014, PHP Quizzer
        </div>
    </footer>
</body>

</html>