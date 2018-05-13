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
        if (isset($_GET['quiz'])) {
            $quiz = $_GET['quiz'];
        }

        echo '<h1>'.$quiz.' Quiz</h1>';

        include("../config/dbconnect.php");
        $qry = 'SELECT * from questions where topic="'.$quiz.'";';
        $result=mysqli_query($con,$qry);


        echo '<form action="quizresult.php" method="post">';
        $j = 1;
        while ($j < mysqli_num_rows($result)-1){
            while($row = mysqli_fetch_array($result)){
                $questions = range(0, 3);
                shuffle($questions);
                echo
                    '<div><h5>'.$j.') '.$row[2].'</h5></div>';
                for($i = 0; $i < 4; $i++){
                    echo '<p><label><input name="'.$j.'" type="radio" value="'.$row[$questions[$i]+3].'" required/> <span>'.$row[$questions[$i]+3].'</span></label></p>';
                }
                $j++;
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



<?php
include("../pagefragments/footer.html");