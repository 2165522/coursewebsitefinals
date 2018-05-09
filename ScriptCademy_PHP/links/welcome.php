<?php

session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");
    exit;
}
include("../pagefragments/header.php");
?>

<nav class="grey lighten-2" role="navigation">
    <div class="nav-wrapper container">
        <a href="../index.php" class="brand-logo">ScriptCademy</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a class="dropdown-trigger" href="#!" data-target="java">Servlets<i class="material-icons right">arrow_drop_down</i></a></li>

            <ul id='java' class='dropdown-content'>
                <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/servlet_notes">What is a Servlet?</a></li>
            </ul>

            <li><a class="dropdown-trigger" href="#!" data-target="php">PHP<i class="material-icons right">arrow_drop_down</i></a></li>

            <ul id='php' class='dropdown-content'>
                <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/notes.php">one</a></li>
                <li><a href="#!">two</a></li>
                <li class="divider" tabindex="-1"></li>
                <li><a href="#!">three</a></li>
                <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
            </ul>

            <li><a class="dropdown-trigger" href="#!" data-target="node">NodeJS<i class="material-icons right">arrow_drop_down</i></a></li>

            <ul id='node' class='dropdown-content'>
                <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/notes.php">one</a></li>
                <li><a href="#!">two</a></li>
                <li class="divider" tabindex="-1"></li>
                <li><a href="#!">three</a></li>
                <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
            </ul>

            <li><a class="dropdown-trigger" href="#!" data-target="acc">Account<i class="material-icons right">arrow_drop_down</i></a></li>

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

<ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
</ul>
<div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col s12 m6">
                    <h1 class="header white-text">ScriptCademy</h1>
                    <h5 class="header white-text">Sign-in to learn different Server-side Web Scripting Technologies</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax"><img style="filter: brightness(40%)" src="../img/back1.jpg" alt="Unsplashed background img 1"></div>
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

                    <!-- Link of review-->

                    <ul class="center">
                        <li><a href="links/servletnotes.php" class="btn-large waves-effect waves-light #80cbc4 teal lighten-3">Review</a></li>
                    </ul>

                </div>
            </div>

            <!-- Take the quiz -->

            <div class="col s12 m6">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">border_color</i></h2>
                    <h5 class="center">Take the quiz</h5>

                    <p class="center light">Test your knowledge about java servlets.</p>

                    <!-- Take the quiz link -->
                    <ul class="center">
                        <li><a href="#" class="btn-large waves-effect waves-light #80cbc4 teal lighten-3">Quiz</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>


<div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h1 class="header white-text">PHP (Hypertext Preprocessor)</h1>

                </div>

            </div>

        </div>
    </div>
    <div class="parallax"><img src="./img/background2.jpg" alt="Unsplashed background img 1"></div>
</div>


<!--   PHP Section   -->
<div class="container">
    <div class="section">



        <div class="row">

            <div class="col s12 m6">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">subject</i></h2>
                    <h5 class="center">Review Course Notes</h5>

                    <p class="center light">Take time in reviewing php scripts.</p>

                    <!-- Link of review-->

                    <ul class="center">
                        <li><a href="./links/PHP.html" class="btn-large waves-effect waves-light #80cbc4 teal lighten-3">Review</a></li>
                    </ul>

                </div>
            </div>

            <!-- Take the quiz -->

            <div class="col s12 m6">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">border_color</i></h2>
                    <h5 class="center">Take the quiz</h5>

                    <p class="center light">Test your knowledge about php scripting.</p>

                    <!-- Take the quiz link -->
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