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

                <li><a class="dropdown-trigger" href="#!" data-target="acc">
                    <?php
                    if ($image_src == null) {
                        echo "Error";
                    } else {
                        echo "<img src=".$image_src." alt='Profile Image' class='circle avatar'>";
                    } ?>
                    </a></li>

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
    <li><div class="user-view">
        <div class="background">
            <img src="../img/back4.jpg">
        </div>
        <a href="#user">
            <?php
            if ($image_src == null) {
                echo "Error";
            } else {
                echo "<img src=".$image_src." alt='Profile Image' class='circle responsive-img'>";
            } ?>
        </a>
        <a href="#name"><span class="white-text name"><a href="profile.php">
            <?php
            echo $_SESSION['username'];
            ?>
            </a> </span></a>
        <a href="../links/logout.php"><span class="white-text email">Logout</span></a>
        </div>
    </li>
    <li><a class="dropdown-trigger" href="#!" data-target="java1">Servlets<i class="material-icons right">arrow_drop_down</i></a></li>

    <ul id='java1' class='dropdown-content'>
        <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/servlet_notes.php">Review Notes</a></li>
        <li><a href="quiz?quiz=Servlets">Take the Quiz</a></li>
    </ul>

    <li><a class="dropdown-trigger" href="#!" data-target="php1">PHP<i class="material-icons right">arrow_drop_down</i></a></li>

    <ul id='php1' class='dropdown-content'>
        <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/php_notes.php">Review Notes</a></li>
        <li><a href="quiz?quiz=PHP">Take the Quiz</a></li>
    </ul>

    <li><a class="dropdown-trigger" href="#!" data-target="node1">NodeJS<i class="material-icons right">arrow_drop_down</i></a></li>

    <ul id='node1' class='dropdown-content'>
        <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/nodejs_notes.php">Review Notes</a></li>
        <li><a href="quiz?quiz=NodeJS">Take the Quiz</a></li>
    </ul>




</ul>