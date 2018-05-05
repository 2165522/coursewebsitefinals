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
                            <h1 class="header center white-text">Java Servlets</h1>
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
                    <div class="collapsible-header active"><i class="material-icons">arrow_drop_down</i>Introduction</div>
                    <div class="collapsible-body">
                        <ul>
                            <li>Java objects that are intended to play the role of server components in client-server communications.</li>
                            <li>handles client request by generating responses to such requests..</li>
                            <li>part of the Java EE specification (see Java Servlet API for more details)..</li>
                            <li>hosted in a 'servlet container' that provides the environment in which the servlet runs, as well as controls the 'servlet lifecycle'..</li>
                    </div>
                    <!-- Start of Second-->
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Servlet Lifecycle</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>HTTPServlet</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
            </ul>
        </div>
    </div> 
</div>



<?php
include("../pagefragments/footer.html");