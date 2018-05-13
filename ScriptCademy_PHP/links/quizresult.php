<?php
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");
    exit;
}
include("../pagefragments/header.php");
include("../pagefragments/nav.php");
?>

<div class="container">
    <div class="row">
        <?php
        $ans = array();
        $score = 0;

        if (isset($_POST['quiz'])) {
            $quiz = $_POST['quiz'];
        }


        include("../config/dbconnect.php");
        
        $qry = 'SELECT * from questions where topic="'.$quiz.'";';
        $result=mysqli_query($con,$qry);

        $numRows = mysqli_num_rows($result);
        for($i = 1; $i <= $numRows; $i++){   
            if (isset($_POST[''.$i.''])) {
                array_push($ans, $_POST[''.$i.'']);
            }
        }

        $counter = 0;
        while($row = mysqli_fetch_array($result)){
            if($row[7] == $ans[$counter]){
                $score++; 
            }
            $counter++;
        }
        
        $qry2 = 'update user_accounts set '.$quiz.'_score = "'.$score.'/'.$numRows.'" where user_id = '.$_SESSION['user_id'].';';
        
        mysqli_query($con,$qry2);

        echo '<h1>'.$quiz.' Quiz</h1>';
        echo '<h2>SCORE: '.$score.'/'.$numRows.'</h2>';
        ?>
    </div>
</div>



<?php
include("../pagefragments/footer.html");