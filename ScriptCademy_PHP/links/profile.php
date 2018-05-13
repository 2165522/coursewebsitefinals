<?php

session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");
    exit;
}
include("../config/dbconnect.php");

include("../pagefragments/header.php");
?>
<div class="navbar-fixed">
    <nav class="grey lighten-2" role="navigation">
        <div class="nav-wrapper container">
            <a href="../index.php" class="brand-logo">ScriptCademy</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a class="dropdown-trigger" href="#!" data-target="java">Servlets<i class="material-icons right">arrow_drop_down</i></a></li>

                <ul id='java' class='dropdown-content'>
                    <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/servlet_notes.php">Review Notes</a></li>
                    <li><a href="quiz?quiz=Servlets">Take the Quiz</a></li>
                </ul>

                <li><a class="dropdown-trigger" href="#!" data-target="php">PHP<i class="material-icons right">arrow_drop_down</i></a></li>

                <ul id='php' class='dropdown-content'>
                    <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/php_notes.php">Review Notes</a></li>
                    <li><a href="quiz?quiz=PHP">Take the Quiz</a></li>
                </ul>

                <li><a class="dropdown-trigger" href="#!" data-target="node">NodeJS<i class="material-icons right">arrow_drop_down</i></a></li>

                <ul id='node' class='dropdown-content'>
                    <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/nodejs_notes.php">Review Notes</a></li>
                    <li><a href="quiz?quiz=NodeJS">Take the Quiz</a></li>
                </ul>

                <li><a class="dropdown-trigger" href="#!" data-target="acc"><img src="../img/avatar.png" alt="" class="circle avatar"></a></li>

                <ul id='acc' class='dropdown-content'>
                    <li><a href="profile.php">
                        <?php
                        echo $_SESSION['username'];
                        ?>
                        </a> 
                    </li>
                    <li><a href="../links/logout.php">Logout</a></li>
                </ul>
            </ul>

        </div>
    </nav>
</div>
<div class="row">
    <div class="container">
        <div class="section">
            <div class="col s12 m4 l3">
                <img class="profileavatar" src="../img/avatar.png" alt="" class="circle responsive-img">
                <form action="#" method="post" enctype='multipart/form-data'>
                    <div class="file-field input-field">
                        <div class="row">
                            <div class="col s8 offset-s2 m8 offset-m2 l8 offset-l2  blue darken-1 btn">
                                <span>Choose image</span>
                                <input type="file" name="file">
                            </div>
                            <div class="col s8 offset-s2 m8 offset-m2 l8 offset-l2 file-path-wrapper">
                                <input class="file-path validate" type="text">

                                <button class="btn  blue darken-1" type="submit" name="uploadimage">Upload
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col s12 m8 l9">
                <h3>Account Information:</h3>
                <h5><span><i class="small material-icons">assignment_ind</i></span>Name: <span style="font-weight: 300;"><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></span></h5>
                <h5><span><i class="small material-icons">assignment_ind</i></span>Username: <span style="font-weight: 300;"><?php echo $_SESSION['username']; ?></span></h5>
                <h5><span><i class="small material-icons">email</i></span>Email address: <span style="font-weight: 300;"><?php echo $_SESSION['email']; ?></span></h5>
                <br>
                <hr>
                <h3>Quiz Scores:</h3>
                <div class="row">
                    <div class="col s12 m5 l6">
                        <?php 

                        $query = "select * from user_accounts where user_id =".$_SESSION['user_id'].";";

                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_assoc($result);

                        $servlets_score = $row['servlets_score'];
                        $php_score = $row['php_score'];
                        $nodejs_score = $row['nodejs_score'];


                        echo "<h5>Servlets: <span>";
                        if ($servlets_score == null){
                            echo "<span class='pnotice'>You didn't take the quiz yet.</span></span>
                        <h5><a href='quiz?quiz=Servlets'>Take the quiz</a></h5>";
                        } else {
                            echo $servlets_score."</span></h5>";
                            echo "<h5><a href='quiz?quiz=Servlets'>Retake the quiz</a></h5>"; 
                        }

                        echo "<h5>PHP: <span>";
                        if ($php_score == null){
                            echo "<span class='pnotice'>You didn't take the quiz yet.</span></span>
                        <h5><a href='quiz?quiz=PHP'>Take the quiz</a></h5>";
                        } else {
                            echo $php_score."</span></h5>";
                            echo "<h5><a href='quiz?quiz=PHP'>Retake the quiz</a></h5>"; 
                        }

                        echo "<h5>NodeJS: <span>";
                        if ($nodejs_score == null){
                            echo "<span class='pnotice'>You didn't take the quiz yet.</span></span>
                        <h5><a href='quiz?quiz=NodeJS'>Take the quiz</a></h5>";
                        } else {
                            echo $nodejs_score."</span></h5>";
                            echo "<h5><a href='quiz?quiz=NodeJS'>Retake the quiz</a></h5>"; 
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php
include("../pagefragments/footer.html");
