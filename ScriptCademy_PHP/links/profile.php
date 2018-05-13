<?php

session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");
    exit;
}
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
            </div>
            <div class="col s12 m8 l9">
                <h3>Account Information:</h3>
                <h5><span><i class="small material-icons">assignment_ind</i></span>Name: <span style="font-weight: 300;"><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></span></h5>
                <h5><span><i class="small material-icons">assignment_ind</i></span>Username: <span style="font-weight: 300;"><?php echo $_SESSION['username']; ?></span></h5>
                <h5><span><i class="small material-icons">email</i></span>Email address: <span style="font-weight: 300;"><?php echo $_SESSION['email']; ?></span></h5>
                <br>
                <hr>
                <a class="blue darken-4 btn">Edit account information</a>
                <h3>Quiz Scores:</h3>
                <div class="row">
                    <div class="col s12 m5 l6">
                        <?php 
                        echo "<h5>Servlets: <span>";
                        if (!isset($_SESSION['servletscore'])){
                            echo "<span class='pnotice'>You didn't take the quiz yet.</span></span>
                        <h5><a href='quiz?quiz=Servlet'>Take the quiz</a></h5>";
                        } else {
                            echo $_SESSION['servletscore']."</span></h5>";
                            echo "<h5><a href='quiz?quiz=Servlet'>Retake the quiz</a></h5>"; 
                        }

                        echo "<h5>PHP: <span>";
                        if (!isset($_SESSION['phpscore'])){
                            echo "<span class='pnotice'>You didn't take the quiz yet.</span></span>
                        <h5><a href='quiz?quiz=PHP'>Take the quiz</a></h5>";
                        } else {
                            echo $_SESSION['phpscore']."</span></h5>";
                            echo "<h5><a href='quiz?quiz=PHP'>Retake the quiz</a></h5>"; 
                        }

                        echo "<h5>NodeJS: <span>";
                        if (!isset($_SESSION['nodejsscore'])){
                            echo "<span class='pnotice'>You didn't take the quiz yet.</span></span>
                        <h5><a href='quiz?quiz=NodeJS'>Take the quiz</a></h5>";
                        } else {
                            echo $_SESSION['nodejsscore']."</span></h5>";
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
