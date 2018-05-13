<?php

session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");
    exit;
} 
include("../pagefragments/header.php");
include("../pagefragments/nav.php");
?>

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