<?php
header("HTTP/1.1 200 OK");
header("Content-Type: text/html");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>ScriptCademy</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.min.css" type="text/css" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <style>
            i.waves-light {
                color: waves-light;
            }
        </style>
    </head>

    <body>
        <div id="index-banner" class="parallax-container valign-wrapper">
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6">
                            <h1 class="header white-text">ScriptCademy</h1>
                            <h5 class="header white-text">Sign-in to learn different Server-side Web Scripting Technologies</h5>
                        </div>
                        <div class="col s12 m5 offset-m1">
                            <div class="card white darken-1">
                                <div class="card-content blue-text">
                                    <span class="card-title">Sign In</span>
                                    <hr>
                                    <div class="row">
                                        <form class="col s12">
                                            <div class="row">
                                                <div class="input-field col s12 m12">
                                                    <i class="material-icons waves-light prefix">account_circle</i>
                                                    <input id="icon_prefix" type="text" class="validate">
                                                    <label for="icon_prefix">Username</label>
                                                </div>
                                                <div class="input-field col s12 m12">
                                                    <i class="material-icons waves-light prefix">security</i>
                                                    <input id="icon_prefix" type="password" class="validate">
                                                    <label for="icon_prefix">Password</label>
                                                </div>
                                                <div class="col s12 m6 offset-m4">
                                                    <button class="btn waves-effect waves-light" type="submit" name="action">Sign In</button>
                                                </div>
                                                <div class="col s12 m2 offset-m2">
                                                    <p> <br></p>
                                                </div>
                                                <div class="col s12 m10 offset-m1">
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
            <div class="parallax"><img style="filter: brightness(40%)" src="img/background1.jpg" alt="Unsplashed background img 1"></div>
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
