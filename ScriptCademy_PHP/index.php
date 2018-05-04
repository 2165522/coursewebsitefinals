<?php
header("HTTP/1.1 200 OK");
header("Content-Type: text/html");
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Learn Server-side Web Scripting</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <style>
            i.waves-light {
                color: waves-light;
            }

        </style>
    </head>

    <body>
        <!-- Navigation -->

        <nav class="grey lighten-2" role="navigation">
            <div class=" nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo light-blue-text text-darken-4">ScriptCademy</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="dropdown-trigger" href="#!" data-target="servlets">Java Servlets<i class="material-icons right">arrow_drop_down</i></a></li>

                    <ul id='servlets' class='dropdown-content'>
                        <li><a href="#!">one</a></li>
                        <li><a href="#!">two</a></li>
                        <li class="divider" tabindex="-1"></li>
                        <li><a href="#!">three</a></li>
                        <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                        <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                    </ul>

                    <li><a class="dropdown-trigger" href="#!" data-target="php">PHP<i class="material-icons right">arrow_drop_down</i></a></li>

                    <ul id='php' class='dropdown-content'>
                        <li><a href="#!">one</a></li>
                        <li><a href="#!">two</a></li>
                        <li class="divider" tabindex="-1"></li>
                        <li><a href="#!">three</a></li>
                        <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                        <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                    </ul>
                    <a id="logo-container" href="#" class="brand-logo light-blue-text text-darken-4"></a>
                    <ul class="right hide-on-med-and-down ">
                        <li><a href="#">Java Servlets</a></li>
                        <li><a href="#">PHP</a></li>
                    </ul>

                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li class="light-blue-text text-darken-4">
                <div class="container">
                    <h5>Course Notes</h5>
                </div>
            </li>
            <li><a href="!#" class="dropdown-trigger" data-target="servlets">Java Servlets</a></li>
            <li><a href="#">PHP</a></li>
            <li><a href="#">Javascript</a></li>
        </ul>

        <!-- Server-Side Web Scripting Technologies section-->

        <div id="index-banner" class="parallax-container valign-wrapper">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6">
                            <h1 class="header white-text">Server-side Web Scripting Technologies</h1>
                        </div>
                        <div class="col s12 m4 offset-m2">
                            <div class="card white darken-1">
                                <div class="card-content blue-text">
                                    <span class="card-title">Sign In</span>
                                    <hr>
                                    <div class="row">
                                        <form class="col s12">
                                            <div class="row">
                                                <div class="input-field col s6 m12">
                                                    <i class="material-icons waves-light prefix">account_circle</i>
                                                    <input id="icon_prefix" type="text" class="validate">
                                                    <label for="icon_prefix">Username</label>
                                                </div>
                                                <div class="input-field col s6 m12">
                                                    <i class="material-icons waves-light prefix">security</i>
                                                    <input id="icon_prefix" type="password" class="validate">
                                                    <label for="icon_prefix">Password</label>
                                                </div>
                                                <div class="col s12 m6 offset-m4">
                                                    <button class="btn waves-effect waves-light" type="submit" name="action">Sign In</button>
                                                </div>
                                                <div class="col s6 m6 offset-m3">
                                                    <p> <br></p>
                                                </div>
                                                <div class="col s6 m6 offset-m3">
                                                    <a href="links/signup.php">Create an account now!</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="parallax"><img src="img/background1.jpg" alt="Unsplashed background img 1"></div>
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
                                <li><a href="links/notes.php" class="btn-large waves-effect waves-light #80cbc4 teal lighten-3">Review</a></li>
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

        <!-- PHP section-->


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

        <footer class="page-footer light-blue darken-4">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">ScriptCademy</h5>
                        <p class="grey-text text-lighten-4">We are a team of third-year BS Information Technology in Saint Louis University taking up Web Systems and Technologies.</p>


                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Course Notes</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Java Servlets</a></li>
                            <li><a class="white-text" href="#!">PHP (Hypertext Processing)</a></li>
                            <li><a class="white-text" href="#!">NodeJS</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Quizzes</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Java Servlets</a></li>
                            <li><a class="white-text" href="#!">PHP (Hypertext Processing)</a></li>
                            <li><a class="white-text" href="#!">NodeJS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/bin/materialize.min.js"></script>
        <script src="js/bin/init.js"></script>
        <script>
            $(document).ready(function() {
                $('.dropdown-trigger').dropdown();
            });
            $(document).ready(function() {
                $('.collapsible').collapsible();
            });

        </script>
    </body>

    </html>
