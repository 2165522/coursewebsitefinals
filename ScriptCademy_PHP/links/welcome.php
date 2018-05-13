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
                        <img class="logos" style="width: 300px !important;" src="../img/nodejs.png">
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

<?php
include("../pagefragments/footer.html");