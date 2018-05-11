<?php

session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");
    exit;
} else {

    $con = new mysqli("p:localhost", "root", "", "scriptcademy");

    if (isset($_POST['action'])){
        session_start();
        $uname = mysqli_real_escape_string($con, $_POST['username']);
        $pword = mysqli_real_escape_string($con, $_POST['password']);

        $query = "SELECT username, password from user_accounts where username = '$uname' and password = '$pword'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1){
            $_SESSION['username'] = $_POST['username'];
            header ("location: ../index.php");
        } else {
            echo "Wrong credentials";
        }
    }
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
                    <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/servlet_notes">Review Notes</a></li>
                    <li><a href="quiz?quiz=Servlets">Take the Quiz</a></li>
                </ul>

                <li><a class="dropdown-trigger" href="#!" data-target="php">PHP<i class="material-icons right">arrow_drop_down</i></a></li>

                <ul id='php' class='dropdown-content'>
                    <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/php_notes">Review Notes</a></li>
                    <li><a href="#">Take the Quiz</a></li>
                </ul>

                <li><a class="dropdown-trigger" href="#!" data-target="node">NodeJS<i class="material-icons right">arrow_drop_down</i></a></li>

                <ul id='node' class='dropdown-content'>
                    <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/nodejs_notes">Review Notes</a></li>
                    <li><a href="#">Take the Quiz</a></li>
                </ul>

                <li><a class="dropdown-trigger" href="#!" data-target="acc"><img src="../img/avatar.png" alt="" class="circle avatar"></a></li>

                <ul id='acc' class='dropdown-content'>
                    <li><a href="#">
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

<ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
</ul>

<div class="slider fullscreen">
    <ul class="slides">
        <li>
            <img style="filter: brightness(40%)" src="../img/back4.jpg">
            <div class="caption left-align">
                <h2>ScriptCademy</h2>
                <h5 class="light grey-text text-lighten-3">Learn different Server-side Web Scripting Technologies and <br>take our quizzes to test your knowledge!</h5>
            </div>
        </li>
        <li>
            <img style="filter: brightness(40%)" src="../img/back2.jpg"> 
            <div class="caption right-align">
                <h1>Servlets</h1>
                <div class="row">
                    <div class="col s12 m4 offset-m8 l4 offset-l8">
                        <img class="logos" src="../img/java.png">
                    </div>
                </div>
            </div>
        </li>
        <li>
            <img style="filter: brightness(40%)" src="../img/back3.jpg">
            <div class="caption left-align">
                <h1>PHP (Hypertext Preprocessor)</h1>
                <div class="row">
                    <div class="col s12 m4 l4">
                        <img class="logos" src="../img/php.png">
                    </div>
                </div>
            </div>
        </li>
        <li>
            <img style="filter: brightness(40%)" src="../img/back1.jpg">
            <div class="caption center-align">
                <h1>NodeJS</h1>
                <div class="row">
                    <div class="col s12 m4 offset-m4 l4 offset-l4">
                        <img class="logos" src="../img/nodejs.png">
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

<!--   Servlet Section   -->
<div class="container">
    <div class="section">



        <div class="row">
            <div class="col s12 m6">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">subject</i></h2>
                    <h5 class="center">Review Course Notes</h5>
                    <p class="center light">Take time in reviewing java servlets.</p>
                    <ul class="center">
                        <li><a href="links/servletnotes.php" class="btn-large waves-effect waves-light #80cbc4 teal lighten-3">Review</a></li>
                    </ul>
                </div>
            </div>
            <div class="col s12 m6">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">border_color</i></h2>
                    <h5 class="center">Take the quiz</h5>
                    <p class="center light">Test your knowledge about java servlets.</p>
                    <ul class="center">
                        <li><a href="#" class="btn-large waves-effect waves-light #80cbc4 teal lighten-3">Quiz</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("../pagefragments/footer.html");