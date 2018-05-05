<?php

header("HTTP/1.1 200 OK");
header("Content-Type: text/html");
include("../pagefragments/header.html");

?>
<div id="index-banner" class="parallax-container valign-wrapper">
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12">
                            <h1 class="header center white-text">PHP (Hypertext Preprocessor)</h1>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="parallax"><img src="../img/background1.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)";></div>
        </div>
<div class="row">
    <div class="col l12 s12 m12">
        <div class="container">
            <ul class="collapsible expandable">
                <li>
                    <div class="collapsible-header active"><i class="material-icons">arrow_drop_down</i>Basic Syntax, Types</div>
                    <div class="collapsible-body">
                            <p> When PHP parses a file, it looks for opening and closing tags, which are <b>&lt?php</b> and <b>?&gt</b> which tell PHP to start and stop interpreting the code between them.</p>
                        
                            <p>If pure PHP code it is preferable to used the PHP closing tag, this will prevents accidental whitespace or new lines being added after the PHP closing tag. Causing different effects because PHP will start output buffering when there is no intention from the programmer to send and output at that point in the script.</p>

                    </div>
                    <!-- Start of Second-->
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Control Structures</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Functions</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Operators</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
            </ul>
        </div>
    </div> 
</div>



<?php
include("../pagefragments/footer.html");