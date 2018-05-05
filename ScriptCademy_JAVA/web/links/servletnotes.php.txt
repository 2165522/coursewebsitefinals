<?php

header("HTTP/1.1 200 OK");
header("Content-Type: text/html");
include("../pagefragments/header.html");

?>

<div class="row">
    <div class="col l12 s12 m12">
        <div class="container">
            <ul class="collapsible expandable">
                <li>
                    <div class="collapsible-header active"><i class="material-icons">arrow_drop_down</i>Basic Syntax, Types</div>
                    <div class="collapsible-body">
                    <h5>BASIC SYNTAX</h5>
                    <ul>
                    <li><p> When PHP parses a file, it looks for opening and closing tags, which are &lt?php and ?> which tell PHP to start and stop interpreting the code between them.</p></li>
                    <li>If pure PHP code it is preferable to used the PHP closing tag, this will prevents accidental whitespace or new lines being added after the PHP closing tag. Causing different effects because PHP will start output buffering when there is no intention from the programmer to send and output at that point in the script.</li>
                    </ul>
                    
                    </div>
                    <!-- Start of Second-->
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Second</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Third</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
            </ul>
        </div>
    </div> 
</div>



<?php
include("../pagefragments/footer.html");


