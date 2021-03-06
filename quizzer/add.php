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
        <h2>Add a Question</h2>
        <form method="post" action="add.php">
            <p>
                <label>Question Number:</label>
                <input type="number" name="question_number"/>
            </p>
            <p>
                <label>Question Text:</label>
                <input type="Text" name="question_text"/>
            </p>
            <p>
                <label>Choice #1:</label>
                <input type="Text" name="choice1"/>
            </p>
            <p>
                <label>Choice #2:</label>
                <input type="Text" name="choice2"/>
            </p>   
            <p>
                <label>Choice #3:</label>
                <input type="Text" name="choice3"/>
            </p>   
            <p>
                <label>Choice #4:</label>
                <input type="Text" name="choice4"/>
            </p>   
            <p>
                <label>Choice #5:</label>
                <input type="Text" name="choice5"/>
            </p>
            <p>
                <label>Correct Choice Number:</label>
                <input type="number" name="correct_choice"/>
            </p>
            <p>
                <input type="button" name="submit" value="Submit"/>
            </p>                                                                                          
        </form>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy; 2014, PHP Quizzer
        </div>
    </footer>
</body>

</html>