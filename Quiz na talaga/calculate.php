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
                $ans = array();
                $score = 0;
                
                if (isset($_POST['quiz'])) {
                    $quiz = $_POST['quiz'];
                }
                
                
                $con=mysqli_connect("localhost","root","","webtek");
                $qry = 'SELECT * from quiz natural join questions where quiz_title="'.$quiz.'";';
                $result=mysqli_query($con,$qry);
                
                $numRows = mysqli_num_rows($result);
                for($i = 1; $i <= $numRows; $i++){   
                    if (isset($_POST[''.$i.''])) {
                        array_push($ans, $_POST[''.$i.'']);
                    }
                }
                
                $counter = 0;
                while($row = mysqli_fetch_array($result)){
                    if($row[5] == $ans[$counter]){
                        $score++; 
                    }
                    $counter++;
                }
            
                echo '<h1>'.$quiz.'</h1>';
                echo '<h2>SCORE: '.$score.'/'.$numRows.'</h2>';

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
