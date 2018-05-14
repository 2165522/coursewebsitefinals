<?php
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");
    exit;
}
include("../pagefragments/header.php");
include("../pagefragments/nav.php");

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
                        <h1 class="header right white-text">Basic Syntax, Data Types, Constants</h1>
                    </div>
                    <ul>

                    </ul>

                </div>
            </div>
        </div>
        <div class="parallax"><img src="../img/back1.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)" ;></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#Basic").click(function() {
                $("#PhpCode").toggle();
            });
        });
    </script>
    <div class="row">
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s16 m8 l12 main-content">

                        <!-- Start of adding notes-->
                        <h3>PHP tags</h3>
                        <ul>
                            <li>
                                <p>When PHP parse and encounter the <strong>&lt;?php ?></strong> tells to the PHP the start and stop of the code and interpret the code inside.</p><a href="#" id="Basic">See sample code</a>
                            </li>

                            <div class="code-sample" id="PhpCode" style="display:none">
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
                            <h3 class="Corn" data-target="tago">Boolean</h3>
                            <ul>
                                <li>
                                    <p>Considered as the simplest type in which it only gives a correct value whether it’s TRUE or FALSE.</p>
                                </li>

                                <h3>Integer</h3>
                                <li><strong>Decimal</strong> – base 10</li>
                                <li><strong>Hexadecimal</strong> – base 16, begin the number with 0x in using this notation.</li>
                                <li><strong>Octal</strong> – base 8, begin the number with 0 in using this notation.</li>
                                <li><strong>Binary</strong> – base 2, begin the number with 0b in using this notation.</li>
                                <h3>Float (floating-point number, aka double)</h3>
                                <li>
                                    <p>Floating point numbers which are also known as "floats", "doubles", or "real numbers"</p>
                                </li>

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
                                    <li>
                                        <p>Some numeric operations can bring about a value represented by the constant NAN.</p>
                                    </li>
                                    <li>
                                        <p>NAN Represents any number of various value and ought not be contrasted with different qualities, including itself rather it ought to be checked for utilizing is_nan().</p>
                                    </li>

                                    <h3>String</h3>

                                    <li>
                                        <p>A string is a progression of character that are same as a byte. PHP just backings a 256-character set and does not offer local Unicode bolster.</p>
                                    </li>

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
                <script>
                    $(document).ready(function() {
                        $("#Var").click(function() {
                            $("#VarCode").toggle();
                        });
                    });
                </script>
                <div class="row">
                    <div class="container">
                        <div class="section">
                            <div class="row">
                                <div class="col s16 m8 l12 main-content">

                                    <!-- Start of adding notes-->

                                    <ul>
                                        <h3 id="Basics">Basics</h3>
                                        <li>
                                            <p>Variables are represented by a dollar sign followed by the variable name which also case-sensitive.</p>
                                            <a href="#Basics" id="Var">See sample code</a>
                                        </li>

                                        <div class="code-sample" id="VarCode" style="display:none">
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
                                            <li>
                                                <p>Constant is known as an identifier(name) for a simple value that cannot be changed during the execution of the script(except for magic constants because it is not actually a constants). A constant is case-sensitive that is why constant identifiers are always in uppercase.
                                                </p>
                                            </li>


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
                                                <li>
                                                    <p>The if construct is one of the most important features of many languages, PHP included. It allows for conditional execution of code fragments. PHP features an if structure that is similar to that of C.</p>
                                                </li>

                                                <h3>Else Statement</h3>
                                                <li>
                                                    <p>Often you'd want to execute a statement if a certain condition is met, and a different statement if the condition is not met. This is what else is for. else extends an if statement to execute a statement in case the expression in the if statement evaluates to FALSE. For example, the following code would display a is greater than b if $a is greater than $b, and a is NOT greater than b otherwise.</p>
                                                </li>

                                                <h3>While</h3>
                                                <li>
                                                    <p>while loops are the simplest type of loop in PHP. They behave just like their C counterparts.</p>
                                                </li>

                                                <h3>do-While</h3>
                                                <li>
                                                    <p>do-while loops are very similar to while loops, except the truth expression is checked at the end of each iteration instead of in the beginning. The main difference from regular while loops is that the first iteration of a do-while loop is guaranteed to run (the truth expression is only checked at the end of the iteration), whereas it may not necessarily run with a regular while loop (the truth expression is checked at the beginning of each iteration, if it evaluates to FALSE right from the beginning, the loop execution would end immediately).</p>
                                                </li>

                                                <h3>For</h3>
                                                <li>
                                                    <p>for loops are the most complex loops in PHP. They behave like their C counterparts.</p>
                                                </li>

                                                <h3>foreach</h3>
                                                <li>
                                                    <p>The foreach construct provides an easy way to iterate over arrays. foreach works only on arrays and objects, and will issue an error when you try to use it on a variable with a different data type or an uninitialized variable.</p>
                                                </li>


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
                                                <h1 class="header left white-text">Predefined Variables</h1>
                                            </div>
                                            <ul>

                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="parallax"><img src="../img/back1.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)" ;></div>
                            </div>
                            <div class="container">
                                <div class="section">
                                    <div class="row">
                                        <div class="col s16 m8 l12 main-content">

                                            <!-- Start of adding notes-->

                                            <ul>
                                                <li>Superglobals — Superglobals are built-in variables that are always available in all scopes
                                                </li>
                                                <li>$GLOBALS — References all variables available in global scope
                                                </li>
                                                <li>$_SERVER — Server and execution environment information
                                                </li>
                                                <li>$_GET — HTTP GET variables
                                                </li>
                                                <li>$_POST — HTTP POST variables
                                                </li>
                                                <li>$_FILES — HTTP File Upload variables
                                                </li>
                                                <li>$_REQUEST — HTTP Request variables
                                                </li>
                                                <li>$_SESSION — Session variables
                                                </li>
                                                <li>$_ENV — Environment variables</li>
                                                <li>$_COOKIE — HTTP Cookies</li>
                                                <li>$php_errormsg — The previous error message
                                                </li>
                                                <li>$HTTP_RAW_POST_DATA — Raw POST data
                                                </li>
                                                <li>$http_response_header — HTTP response headers
                                                </li>
                                                <li>$argc — The number of arguments passed to script
                                                </li>
                                                <li>$argv — Array of arguments passed to script
                                                </li>
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
                                                <h1 class="header left white-text">References</h1>
                                            </div>
                                            <ul>

                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="parallax"><img src="../img/back1.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)" ;></div>
                            </div>
                            <script>
                                $(document).ready(function() {
                                    $("#AssignRef").click(function() {
                                        $("#RefCode").toggle();
                                    });
                                });
                            </script>
                            <script>
                                $(document).ready(function() {
                                    $("#PassRef").click(function() {
                                        $("#PassCode").toggle();
                                    });
                                });
                            </script>
                            <script>
                                $(document).ready(function() {
                                    $("#RetRef").click(function() {
                                        $("#RetCode").toggle();
                                    });
                                });
                            </script>
                            <script>
                                $(document).ready(function() {
                                    $("#UnRef").click(function() {
                                        $("#UnCode").toggle();
                                    });
                                });
                            </script>
                            <script>
                                $(document).ready(function() {
                                    $("#SpotRef").click(function() {
                                        $("#SpotCode").toggle();
                                    });
                                });
                            </script>                                                                                       
                            
                            <div class="container">
                                <div class="section">
                                    <div class="row">
                                        <div class="col s16 m8 l12 main-content">

                                            <!-- Start of adding notes-->

                                            <p>References in PHP are a means to access the same variable content by different names. They are not like C pointers; for instance, you cannot perform pointer arithmetic using them, they are not actual memory addresses, and so on. There are three basic operations performed using references: assigning by reference, passing by reference, and returning by reference.</p>
                                            <ul>
                                                <div id="anchor"></div>
                                                <li><strong>ASIGNING REFERENCES</strong>-PHP references allow you to make two variables refer to the same content.<br>
                                                    <a href="#anchor" id="AssignRef">See sample code</a>

                                                    <div class="code-sample" id="RefCode" style="display:none">
                                                        <div class="code-comment">
                                                            //... Sample code
                                                        </div>
                                                        &lt;?php <br> $a =& $b; <br>?><br>
                                                    </div>
                                                </li>
                                                <li><strong>PASSING REFERENCES</strong> - The second thing references do is to pass variables by reference<br>
                                                <a href="#AssignRef" id="PassRef">See sample code</a> 
                                                                                               
                                            <div class="code-sample" id="PassCode" style="display:none">
                                                        <div class="code-comment" >
                                                            //... Sample code
                                                        </div>
                                                        &lt;?php <br> function foo(&$var)<br> {<br> $var++;<br> }<br> $a=5; <br>foo($a); <br>?><br>

                                                    </div>
                                                </li>
                                                <li><strong>RETURN BY REFERENCE</strong> - The third thing references can do is return by reference.<br>
                                                   <a href ="#PassRef" id="RetRef">See sample code</a>
                                                    <div class="code-sample" id="RetCode" style="display:none">
                                                        <div class="code-comment">
                                                            //... Sample code
                                                        </div>
                                                        &lt;?php <br> $obj = new foo;<br> $myValue = &$obj->getValue();<br> // $myValue is a reference to $obj->value, which is 42.<br> $obj->value = 2; <br>echo $myValue; <br>?><br>


                                                    </div>
                                                </li>
                                                <li><strong>UNSETTING REFERENCES</strong> - When you unset the reference, you just break the binding between variable name and variable content.<br>
                                                   <a href="#RetRef" id="UnRef">See sample code</a>
                                                    <div class="code-sample" id="UnCode" style="display:none">
                                                        <div class="code-comment">
                                                            //... Sample code
                                                        </div>
                                                        &lt;?php <br> $a = 1; $b =& $a; unset($a); <br>?><br>
                                                    </div>
                                                </li>
                                                <li><strong>SPOTTING REFERENCES</strong> - Many syntax constructs in PHP are implemented via referencing mechanisms<br>
                                                   <a href="#UnRef" id="SpotRef">See sample code</a>
                                                    <div class="code-sample" id="SpotCode" style="display:none">
                                                        <div class="code-comment">
                                                            //... Sample code
                                                        </div>
                                                        &lt;?php <br> $var =& $GLOBALS["var"]; <br>?><br>
                                                    </div>
                                                </li>
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
                                                <h1 class="header left white-text">Generators</h1>
                                            </div>
                                            <ul>

                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="parallax"><img src="../img/back1.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)" ;></div>
                            </div>
                            <script>
                                $(document).ready(function() {
                                    $("#YieldNull").click(function() {
                                        $("#YieldCode").toggle();
                                    });
                                });
                            </script>                              
                            <div class="container">
                                <div class="section">
                                    <div class="row">
                                        <div class="col s16 m8 l12 main-content">

                                            <!-- Start of adding notes-->

                                            <ul>
                                                <li>
                                                    <strong>YIELD KEYWORD</strong>-The heart of a generator function is the yield keyword. In its simplest form, a yield statement looks much like a return statement, except that instead of stopping execution of the function and returning, yield instead provides a value to the code looping over the generator and pauses execution of the generator function.
                                                </li>
                                                <li><strong id="YielVal">YIELDING VALUES WITH KEYS</strong>-PHP also supports associative arrays, and generators are no different. In addition to yielding simple values, you can also yield a key at the same time. Yielding a key/value pair
                                                </li>
                                                <li><strong>YIELDING NULL VALUES</strong>-Yield can be called without an argument to yield a NULL value with an automatic key. Yielding NULLs<br>
                                                   <a href="#YielVal" id="YieldNull">See sample code</a>
                                                    <div class="code-sample" id="YieldCode" style="display:none">
                                                        <div class="code-comment">
                                                            //... Sample code
                                                        </div>
                                                        &lt;?php <br> function gen_three_nulls() { foreach (range(1, 3) as $i) { yield; } } var_dump(iterator_to_array(gen_three_nulls())); <br>?><br>


                                                    </div>
                                                </li>
                                                <li><strong>YIELDING BY REFERENCE</strong>-Generator functions are able to yield values by reference as well as by value. Yielding values by reference
                                                </li>
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
                                                <h1 class="header left white-text">Exceptions</h1>
                                            </div>
                                            <ul>

                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="parallax"><img src="../img/back1.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)" ;></div>
                            </div>
                            <script>
                                $(document).ready(function() {
                                    $("#Extend").click(function() {
                                        $("#ExtendCode").toggle();
                                    });
                                });
                            </script>  
                            <script>
                                $(document).ready(function() {
                                    $("#MultipleEx").click(function() {
                                        $("#MultipleCode").toggle();
                                    });
                                });
                            </script>                                                          
                            <div class="container">
                                <div class="section">
                                    <div class="row">
                                        <div class="col s16 m8 l12 main-content">

                                            <!-- Start of adding notes-->
                                            <p>EXTENDING EXCEPTIONS A User defined Exception class can be defined by extending the built-in Exception class. The Built in Exception class</p>
                                            <div id="anchor2"></div>
                                            <ul>
                                                <li>finally - In PHP 5.5 and later, a finally block may also be specified after or instead of catch blocks. Code within the finally block will always be executed after the try and catch blocks, regardless of whether an exception has been thrown, and before normal execution resumes. Exception handling with a finally block<br>
                                                   <a href="#anchor2" id="Extend">See sample code</a>
                                                    <div class="code-sample" id="ExtendCode" style="display:none">
                                                        <div class="code-comment">
                                                            //... Sample code
                                                        </div>
                                                        &lt;?php <br> try {<br> echo inverse(5) . "\n";<br> } catch (Exception $e) {<br> echo 'Caught exception: ', $e->getMessage(), "\n";<br> } finally { <br> echo "First finally.\n"; } <br>?><br>

                                                    </div>
                                                </li>
                                                <li>catch - Multiple catch blocks can be used to catch different classes of exceptions. Normal execution (when no exception is thrown within the try block) will continue after that last catch block defined in sequence. Exceptions can be thrown (or re-thrown) within a catch block. Throwing an Exception with Catch<br>
                                                   <a href="#Extend" id="MultipleEx">See sample code</a>
                                                    <div class="code-sample" id="MultipleCode" style="display:none">
                                                        <div class="code-comment">
                                                            //... Sample code
                                                        </div>
                                                        &lt;?php <br> try { <br> echo inverse(5) . "\n";<br> echo inverse(0) . "\n";<br> } catch (Exception $e) { <br> echo 'Caught exception: ', $e->getMessage(), "\n"; <br>} <br>?><br>
                                                    </div>
                                                </li>
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
    <?php
include("../pagefragments/footer.html");