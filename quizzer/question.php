<?php include 'database.php';
<?php
  //Set question number
    $number =(int) $_GET['n'];

/*
* Get Question
*/

$query = "SELECT * FROM `question`
    WHERE question_number = $number";

//Get result
$choices = $mysqli->query($query) or die ($mysqli-> error._LINE_);

$question = $result->fetch_assoc();
?>
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
            <div class="current">
            Question 1 of 5
            </div>
            <p class="question">What does PHP stand for</p>
            <form method="post" action"process.php">
                <ul class="choices">
                   <?php while($row = $choices->fetch_assoc())L ?>
                   
                   <?php endwhile; ?>
                    <li>
                       <input name="choice" type="radio" value="1"/>
                       PHP: Hypertext Preprocessor
                    </li>
                    <li>
                       <input name="choice" type="radio" value="1"/>
                       HyperText Language
                    </li>
                    <li>
                       <input name="choice" type="radio" value="1"/>
                       Transfer Control Protocol
                    </li>
                    <li>
                       <input name="choice" type="radio" value="1"/>
                      Personal Hypertext processor
                    </li>                                                              
                </ul>
                <input type="submit" value="Submit"/>
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