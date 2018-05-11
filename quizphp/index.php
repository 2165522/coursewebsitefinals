<?php
  include 'connection.php';

  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webtek</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" href="css/override.css">
</head>

<body>
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper blue">
        <span class="brand-logo center">Webtek</span>
      </div>
    </nav>
  </div>
  
  <div class="container row mt-1">
   <div class="col s8" id="content">
     <h1>Welcome!</h1>
     <p class="flow-text">Do you want to take the Quiz</p>
   </div>
    <div class="col s4">
      <div class="card">
        <div class="card-content">
          <span class="card-title">Take a Quiz</span>
          <div class="flex flex-column">
<!--
            <button class="btn waves-effect my-1 red" id="js">JavaScript</button>
            <button class="btn waves-effect my-1 purple lighten-2" id="phsp">PHP</button>
            <button class="btn waves-effect my-1 green" id="node">Node.js</button>
-->
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
          <div class="center my-1">
           
            
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <a href="quiz_maker.php" class="btn waves-effect waves-light blue mt-1">Make a Quiz</a>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
                    <a href="question_maker.php" class="btn waves-effect waves-light blue mt-1">Add questions to quiz</a>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <span class="card-title">Useful Links</span>
        </div>
      </div>
    </div>
  </div>
  
  <div class="fixed-action-btn">
    <a href="#" class="btn-floating btn-large red">
      <i class="material-icons">keyboard_arrow_up</i>
    </a>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
