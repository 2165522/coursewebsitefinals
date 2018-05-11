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
        <span class="brand-logo center"><a href="index.php">Webtek</a></span>
      </div>
    </nav>
  </div>
  
    <div class="container row mt-1">
        <div class="col s12" id="content">
         <?php
            if (isset($_GET['quiz'])) {
                $quiz = $_GET['quiz'];
            }

            echo '<h1>'.$quiz.'</h1>';

            $con=mysqli_connect("localhost","root","","scriptcademy");
            $qry = 'SELECT * from topics natural join questions where topic="'.$quiz.'";';
            $result=mysqli_query($con,$qry);


            echo '<form action="calculate.php" method="post">';
                while($row = mysqli_fetch_array($result)){
                    $questions = range(0, 3);
                    shuffle($questions);
                    echo 
                    '<div><h4>'.$row[3].') '.$row[4].'</h4></div>';
                    for($i = 0; $i < 4; $i++){
                        echo '<input class="rad" type="radio" name="'.$row[3].'" value="'.$row[$questions[$i]+5].'"required>'.$row[$questions[$i]+5].'</br>';

                    }
                }
            echo '
            <input class="radh" type="radio" name="quiz" value="'.$quiz.'" checked>
            <button class="btn waves-effect my-1 blue" type="submit">SUBMIT</button>
            </form>';
            mysqli_close($con);
         ?>

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
