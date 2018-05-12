<?php
    $con = mysqli_connect("localhost", "root", "", "webtek");
    if (isset($_POST['quiz'])){
        $quiz = $_POST['quiz'];
        $qry="insert into quiz (quiz_title) values('$quiz')";
        $result=mysqli_query($con,$qry) or die("ded");
        header('Location: quiz_maker.php?'.$quiz.'');
    }
    mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Make a Quiz</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" href="css/override.css">
  
</head>

<body>
  <nav class="navbar border border-bottom bg-dark border-0">
    <h1 class="navbar-brand lead text-light m-0">Quiz Maker</h1>
    <a href="." class="btn btn-primary" id="quiz">Take a Quiz</a>
  </nav>
  <div class="container mt-5 p-4 border">
    <form method="post" autocomplete="off">
        <label for="quiz">Quiz Title</label>
        <input id="quiz" class="mt-1 form-control" type="text" name="quiz" placeholder="Quiz Title">
        <button class="btn waves-effect my-1 purple" type="submit">ADD QUIZ</button>
    </form>
  </div>
   <div class="container mt-5 p-4 border">
    Available Quizes
    <?php
                $con = mysqli_connect("localhost", "root", "", "webtek");
                $qry = "SELECT * from quiz";
                $result=mysqli_query($con,$qry);
                while($row = mysqli_fetch_array($result)){
                    $gen = rand(0,2);
                    if ($gen == 0){
                        echo 
                            '<form action="quiz.php"    method="post">
                                <input class="radh" type="radio" name="quiz" value="'.$row[1].'" checked>
								<button class="btn waves-effect my-1 purple" id="'.$row[1].'" type="submit">'.$row[1].'</button>
                                </form>';
                    } elseif ($gen == 1){
                        echo '<form action="quiz.php"    method="post">
                                <input class="radh" type="radio" name="quiz" value="'.$row[1].'" checked>
								<button class="btn waves-effect my-1 green" id="'.$row[1].'" type="submit">'.$row[1].'</button>
                                </form>';
                    } elseif ($gen == 2){
                        echo '<form action="quiz.php"    method="post">
                                <input class="radh" type="radio" name="quiz" value="'.$row[1].'" checked>
								<button class="btn waves-effect my-1 red" id="'.$row[1].'" type="submit">'.$row[1].'</button>
                                </form>';
                    }
                }
              mysqli_close($con);
            ?>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

</html>