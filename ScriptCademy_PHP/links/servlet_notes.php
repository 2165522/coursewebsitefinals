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
                    <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/servlet_notes">Review Notes</a></li>
                    <li><a href="#">Take the Quiz</a></li>
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
<div id="index-banner" class="notes_header parallax-container valign-wrapper">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <h1 class="header right white-text">What is a Servlet?</h1>
                </div>

            </div>
        </div>
    </div>
    <div class="parallax"><img src="../img/back1.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)";></div>
</div>
<div class="row">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m8 l8 main-content">
                    <p>Java objects that are intended to play the role of server components in client-server communications.</p>
                    
                    <p>part of the Java EE specification<br><span><a href="https://docs.oracle.com/javaee/7/api/javax/servlet/package-summary.html">(see Java Servlet API for more details)</a></span>.</p>
                </div>
                <div class="col m4 l4 hide-on-small">
                    <img style="width: 300px;" src="../img/java_ee.png">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="index-banner" class="notes_header parallax-container valign-wrapper">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <h1 class="header left white-text">What does it do?</h1>
                </div>

            </div>
        </div>
    </div>
    <div class="parallax"><img src="../img/back1.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)";></div>
</div>
<div class="row">
    <div class="container">
        <div class="section">
            <div class="row"> 
                <div class="col m6 l6 hide-on-small">
                    <img style="width: 440px; margin-top: 50px;" src="../img/server-client.jpg">
                </div>
                <div class="col s12 m6 l6 main-content">
                    <p>handles client request by generating responses to such requests.</p>
                    <p>hosted in a 'servlet container' that provides the environment in which the servlet runs, as well as controls the 'servlet lifecycle'.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="index-banner" class="notes_header parallax-container valign-wrapper">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <h1 class="header right white-text">Servlet Lifecycle</h1>
                </div>

            </div>
        </div>
    </div>
    <div class="parallax"><img src="../img/back1.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)";></div>
</div>
<div class="row">
    <div class="container">
        <div class="section">
            <div class="row"> 
                <div class="col m6 l6 hide-on-small">
                    <img style="width: 440px; margin-top: 50px;" src="../img/server-client.jpg">
                </div>
                <div class="col s12 m6 l6 main-content">
                    <p>handles client request by generating responses to such requests.</p>
                    <p>hosted in a 'servlet container' that provides the environment in which the servlet runs, as well as controls the 'servlet lifecycle'.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include("../pagefragments/footer.html");