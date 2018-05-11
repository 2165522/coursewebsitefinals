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
                    <h1 class="header left white-text">What is NodeJS?</h1>
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
                    <p>Node.js is a JavaScript runtime built on Chrome's V8 JavaScript engine. Node.js uses an event-driven, non-blocking I/O model that makes it lightweight and efficient. Node.js' package ecosystem, npm, is the largest ecosystem of open source libraries in the world.</p>
                    <p>It is free and it is  available on different platforms such as Windows, Linux, Mac OS X, etc.</p>
                    <p><span><a href="https://nodejs.org/en/docs/">(see NodeJS Documentation for more details)</a></span>.
                </div>
                <div class="col m4 l4 hide-on-small">
                    <img style="width: 300px;" src="../img/nodejs.png">
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
                    <h1 class="header right white-text">What does it look like?</h1>
                </div>

            </div>
        </div>
    </div>
    <div class="parallax"><img src="../img/back4.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)";></div>
</div>
<div class="row">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m8 l8 main-content">
                    <p>It looks something like this:</p>
                    <div class = "code-sample">
                        <div class = "code-comment">
                            //Sample Code
                        </div>
                        var http = require('http');<br>
                        <br>
                        http.createServer(function (req, res) {<br>
                        res.writeHead(200, {'Content-Type': 'text/html'});<br>
                        res.end('Sample Statement');<br>
                        }).listen(8080);<br>
                    </div>
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
                    <h1 class="header left white-text">Why NodeJS?</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="../img/back3.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)";></div>
</div>
<div class="row">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m8 l8 main-content">
                    <p>Compared to PHP and ASP, here's how NodeJS handles file request:</p>
                    <ul>
                        <li><b>First:</b> It sends task to the computer's file system.</li>
                        <li><b>Second:</b> It is always ready to handle the next request.</li>
                        <li><b>Third:</b> The server returns the content to the client after the file system has opened and read the file.</li>
                    </ul>
                    <p>NodeJS continues with the next request and get rid of waiting.</p>
                    <p>NodeJS is memory-efficient because it runs non-blocking, asynchronously programming, single-threaded.</p>
                </div>
                <div class="col m4 l4 hide-on-small">
                    <img style="width: 300px;" src="../img/nodejs_3.png">
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
                    <h1 class="header right white-text">What does it do?</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="../img/back2.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)";></div>
</div>
<div class="row">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m8 l8 main-content">
                    <ul>
                        <li>It can collect form data.</li>
                    </ul>
                    <ul>
                        <li>It can produce dynamic page content.</li>
                    </ul> 
                    <ul>
                        <li>It can add, delete, modify data in your database.</li>
                    </ul>
                    <ul>
                        <li>It can create, open, close, read, write, and delete files on the server</li>
                    </ul>
                </div>
                <div class="col m4 l4 hide-on-small">
                    <img style="width: 300px;" src="../img/nodejs_2.png">
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
                    <h1 class="header left white-text">NodeJS Modules</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="../img/back2.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)";></div>
</div>
<div class="row">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m8 l8 main-content">
                    <p>Each file is being considered as separate module in Node.js module system.</p>
                    <ul>
                        <li><b>Built-in Modules:</b> NodeJS has a set of built-in modules which you can use without additional installation.</li>
                        <li>Code looks like this:</li>
                    <div class = "code-sample">
                    const builtin = require('module').builtinModules;
                    </div>
                    </ul>
                    <p><span><a href="https://nodejs.org/dist/latest-v10.x/docs/api/modules.html#modules_module_builtinmodules">(see NodeJS Documentation for more details)</a></span>.
                </div>
                <div class="col m4 l4 hide-on-small">
                    <img style="width: 300px;" src="../img/nodejs_4.png">
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("../pagefragments/footer.html");