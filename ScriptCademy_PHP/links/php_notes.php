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
                    <li>
                        <a href="#">
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
                    <h1 class="header right white-text">PHP (Hypertext Preprocessor)</h1>
                </div>
                <ul>

                </ul>

            </div>
        </div>
    </div>
    <div class="parallax"><img src="../img/back1.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)" ;></div>
</div>
<div class="row">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s16 m8 l12 main-content">
                    <p>A powerful server-side web scripting language which is embedded in HTML pages. It is usually used to create and manage dynamic web contents, get and store data from databases, apply session handling, and many more back-end developing functions.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="index-banner" class="notes_header parallax-container valign-wrapper">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12">
                        <h1 class="header right white-text">Basic Syntax, Data Types, Constants</h1>
                    </div>
                    <ul>

                    </ul>

                </div>
            </div>
        </div>
        <div class="parallax"><img src="../img/back1.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)" ;></div>
    </div>
    <div class="row">
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s16 m8 l12 main-content">

                        <!-- Start of adding notes-->
                        <h3>PHP tags</h3>
                        <ul>
                            <li>
                                <p>When PHP parse and encounter the <strong>&lt;?php ?></strong> tells to the PHP the start and stop of the code and interpret the code inside.</p>
                            </li>

                            <div class="code-sample">
                                <div class="code-comment">
                                    //... Sample code
                                </div>
                                &lt;?php <br> echo "Sample Statement"; <br>?><br>
                                <div class="code-comment">
                                    // the script ends here with no PHP closing tag <br>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="index-banner" class="notes_header parallax-container valign-wrapper">
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12">
                            <h1 class="header left white-text">Data Types</h1>
                        </div>

                    </div>
                </div>
            </div>
            <div class="parallax"><img src="../img/back1.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)" ;></div>
        </div>
        <div class="row">
            <div class="container">
                <div class="section">
                    <div class="row">
                        <div class="col s16 m8 l12 main-content">

                            <!-- Start of adding notes-->

                            <ul>
                                <h3>Boolean</h3>
                                <h3>Integer</h3>
                                <li><strong>Decimal</strong> – base 10</li>
                                <li><strong>Hexadecimal</strong> – base 16, begin the number with 0x in using this notation.</li>
                                <li><strong>Octal</strong> – base 8, begin the number with 0 in using this notation.</li>
                                <li><strong>Binary</strong> – base 2, begin the number with 0b in using this notation.</li>
                                <h3>Float (floating-point number, aka double)</h3>
                                <li><p>Floating point numbers which are also known as "floats", "doubles", or "real numbers"</p></li>

                            </ul>

                        </div>
                    </div>

                </div>

            </div>
            <div id="index-banner" class="notes_header parallax-container valign-wrapper">
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col s12 m12">
                                <h1 class="header left white-text">Data Types Continued</h1>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="parallax"><img src="../img/back1.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)" ;></div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="section">
                        <div class="row">
                            <div class="col s16 m8 l12 main-content">

                                <!-- Start of adding notes-->

                                <ul>
                                    <h3>NAN</h3>
                                    <li> <p>Some numeric operations can bring about a value represented  by the constant NAN.</p></li>
                                    <li><p>NAN Represents any number of various value and ought not be contrasted with different qualities, including itself rather it ought to be checked for utilizing is_nan().</p></li>

                                    <h3>String</h3>

                                    <li> <p>A string is a progression of character that are same as a byte. PHP just backings a 256-character set and does not offer local Unicode bolster.</p></li>

                                </ul>

                            </div>
                        </div>

                    </div>

                </div>

                <div id="index-banner" class="notes_header parallax-container valign-wrapper">
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col s12 m12">
                                    <h1 class="header left white-text">Variables</h1>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="parallax"><img src="../img/back1.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)" ;></div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="section">
                            <div class="row">
                                <div class="col s16 m8 l12 main-content">

                                    <!-- Start of adding notes-->

                                    <ul>
                                        <h3>Basics</h3>
                                        <li> <p>Variables are represented by a dollar sign followed by the variable name which also case-sensitive.</p></li>

                                        <div class="code-sample">
                                            <div class="code-comment">
                                                // Declaring Variables
                                            </div>
                                            &lt;?php <br> $a=1; <br>?>
                                        </div>                    
                                    </ul>

                                </div>
                            </div>

                        </div>

                    </div>

                    <div id="index-banner" class="notes_header parallax-container valign-wrapper">
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col s12 m12">
                                        <h1 class="header left white-text">Constants</h1>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="parallax"><img src="../img/back1.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)" ;></div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="section">
                                <div class="row">
                                    <div class="col s16 m8 l12 main-content">

                                        <!-- Start of adding notes-->

                                        <ul>
                                            <li> <p>Constant is known as an identifier(name) for a simple value that cannot be changed during the execution of the script(except for magic constants because it is not actually a constants). A constant is case-sensitive that is why constant identifiers are always in uppercase.
                                                </p></li>


                                        </ul>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <div id="index-banner" class="notes_header parallax-container valign-wrapper">
                            <div class="section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <h1 class="header left white-text">Control Structures</h1>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="parallax"><img src="../img/back1.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)" ;></div>
                        </div>
                        <div class="row">
                            <div class="container">
                                <div class="section">
                                    <div class="row">
                                        <div class="col s16 m8 l12 main-content">

                                            <!-- Start of adding notes-->

                                            <ul>
                                                <h3>If Statement</h3>
                                                <li><p>The if construct is one of the most important features of many languages, PHP included. It allows for conditional execution of code fragments. PHP features an if structure that is similar to that of C.</p></li>

                                                <h3>Else Statement</h3>
                                                <li><p>Often you'd want to execute a statement if a certain condition is met, and a different statement if the condition is not met. This is what else is for. else extends an if statement to execute a statement in case the expression in the if statement evaluates to FALSE. For example, the following code would display a is greater than b if $a is greater than $b, and a is NOT greater than b otherwise.</p></li> 

                                                <h3>While</h3>
                                                <li><p>while loops are the simplest type of loop in PHP. They behave just like their C counterparts.</p></li> 

                                                <h3>do-While</h3>
                                                <li><p>do-while loops are very similar to while loops, except the truth expression is checked at the end of each iteration instead of in the beginning. The main difference from regular while loops is that the first iteration of a do-while loop is guaranteed to run (the truth expression is only checked at the end of the iteration), whereas it may not necessarily run with a regular while loop (the truth expression is checked at the beginning of each iteration, if it evaluates to FALSE right from the beginning, the loop execution would end immediately).</p></li>

                                                <h3>For</h3>
                                                <li><p>for loops are the most complex loops in PHP. They behave like their C counterparts.</p></li>

                                                <h3>foreach</h3>
                                                <li><p>The foreach construct provides an easy way to iterate over arrays. foreach works only on arrays and objects, and will issue an error when you try to use it on a variable with a different data type or an uninitialized variable.</p></li>


                                            </ul>

                                        </div>
                                    </div>

                                </div>

                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("../pagefragments/footer.html");