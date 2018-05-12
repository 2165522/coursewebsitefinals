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
    Choose a Quiz to Add a Question
    <?php
                $con = mysqli_connect("localhost", "root", "", "webtek");
                $qry = "SELECT * from quiz";
                $result=mysqli_query($con,$qry);
                while($row = mysqli_fetch_array($result)){
                    $gen = rand(0,2);
                    if ($gen == 0){
                        echo 
                            '<form method="post">
                                <input class="radh" type="radio" name="quiz" value="'.$row[1].'" checked>
								<button class="btn waves-effect my-1 purple" id="'.$row[1].'" type="submit">'.$row[1].'</button>
                                </form>';
                    } elseif ($gen == 1){
                        echo '<form method="post">
                                <input class="radh" type="radio" name="quiz" value="'.$row[1].'" checked>
								<button class="btn waves-effect my-1 green" id="'.$row[1].'" type="submit">'.$row[1].'</button>
                                </form>';
                    } elseif ($gen == 2){
                        echo '<form method="post">
                                <input class="radh" type="radio" name="quiz" value="'.$row[1].'" checked>
								<button class="btn waves-effect my-1 red" id="'.$row[1].'" type="submit">'.$row[1].'</button>
                                </form>';
                    }
                }
              mysqli_close($con);
            ?>
  </div>
  <div class="container mt-5 p-4 border">
    <?php
      $con=mysqli_connect("localhost","root","","webtek");
      if(isset($_POST['quiz'])){
          $quiz = $_POST['quiz'];
          echo '<h1>'.$quiz.'</h1>';
          echo '<form method="post">
          <label for="question">Enter Question</label>
          <input id="question" class="mt-1 form-control" type="text" name="question" placeholder="Quiz Title" required>
          
          <label for="Answer">Answer</label>
          <input id="Answer" class="form-control" type="text" name="Answer" placeholder="Answer" required>
          
          <label for="Option_2">Option 1</label>
          <input id="Option_1" class="form-control" type="text" name="Option_1" placeholder="Option 1" required>
          
          <label for="Option_2">Option 2</label>
          <input id="Option_2" class="form-control" type="text" name="Option_2" placeholder="Option_2" required>
          
          <label for="Option_3">Option 3</label>
          <input id="Option_3" class="form-control" type="text" name="Option_3" placeholder="Option_3" required>
          
          <button class="btn waves-effect my-1 purple" type="submit">ADD QUESTION</button>';
          echo '</form>';
      }
            mysqli_close($con);
      ?>
  </div>
  <div class="container mt-5 p-4 border">
<?php
      $con=mysqli_connect("localhost","root","","webtek");
      if(isset($_POST['quiz'])){
          $quiz = $_POST['quiz'];
      
      echo '<h1>'.$quiz.'</h1>';
            $qry = 'SELECT * from quiz natural join questions where quiz_title="'.$quiz.'";';
            $result=mysqli_query($con,$qry);


            echo '<form action="calculate.php" method="post">';
                while($row = mysqli_fetch_array($result)){
                    $arrangeQuest = range(0, 3);
                    shuffle($arrangeQuest);
                    echo 
                    '<div><h4>'.$row[3].') '.$row[4].'</h4></div>';
                    for($i = 0; $i < 4; $i++){
                        echo '<input class="rad" type="radio" name="'.$row[3].'" value="'.$row[$arrangeQuest[$i]+5].'"required>'.$row[$arrangeQuest[$i]+5].'</br>';

                    }
                }
            echo '
            <input class="radh" type="radio" name="quiz" value="'.$quiz.'" checked>
            </form>';
      }
            mysqli_close($con);
      ?>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

</html>