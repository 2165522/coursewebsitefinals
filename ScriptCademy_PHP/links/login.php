
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Learn Server-side Web Scripting</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

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
                                    <br>
                                    <?php

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
                                    ?>
                                    <div class="row">
                                        <form method="post" class="col s12">
                                            <div class="row">
                                                <div class="input-field col s12 m12">
                                                    <i class="material-icons waves-light prefix">account_circle</i>
                                                    <input name="username" type="text" class="validate" required>
                                                    <label for="icon_prefix">Username</label>
                                                </div>
                                                <div class="input-field col s12 m12">
                                                    <i class="material-icons waves-light prefix">security</i>
                                                    <input name="password" id="inputPassword" type="password" class="validate" required>
                                                    <label for="icon_prefix">Password</label>
                                                </div>
                                                <div class="col s12 m6 offset-m4">
                                                    <button class="btn waves-effect waves-light" type="submit" name="action">Sign In</button>
                                                </div>
                                                <div class="col s12 m6 offset-m3">
                                                    <p> <br></p>
                                                </div>
                                                <div class="col s12 m12 offset-m3">
                                                    <a href="http://localhost:8084/ScriptCademy_JAVA/">Create an account now!</a>
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
            <div class="parallax"><img style="filter: brightness(40%)" src="../img/back1.jpg" alt="Unsplashed background img 1"></div>
        </div>

        <?php
        include("../pagefragments/footer.html");