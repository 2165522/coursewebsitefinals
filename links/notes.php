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
                    <div class="collapsible-header active"><i class="material-icons">arrow_drop_down</i>First</div>
                    <div class="collapsible-body"><p>Loredsadadadasdasdasdadadsdasdadasdasdam ipsum dolor sit amet.</p></div>
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


