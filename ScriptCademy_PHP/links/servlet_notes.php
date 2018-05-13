<?php
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");
    exit;
}
include("../pagefragments/header.php");
include("../pagefragments/nav.php");

?>

<div id="index-banner" class="notes_header parallax-container valign-wrapper">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <h1 class="header right white-text">What is a Servlet?</h1>
                </div>

            </div>
        </div>
    </div>
    <div class="parallax"><img src="../img/back1.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)";></div>
</div>
<div class="row">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m8 l8 main-content">
                    <p>Java objects that are intended to play the role of server components in client-server communications.</p>
                    <p>part of the Java EE specification<br><span><a href="https://docs.oracle.com/javaee/7/api/javax/servlet/package-summary.html">(see Java Servlet API for more details)</a></span>.</p>
                </div>
                <div class="col m4 l4 hide-on-small">
                    <img style="width: 300px;" src="../img/java_ee.png">
                </div>
            </div>
        </div>
    </div>
</div>

<div id="index-banner" class="notes_header parallax-container valign-wrapper">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <h1 class="header left white-text">What does it do?</h1>
                </div>

            </div>
        </div>
    </div>
    <div class="parallax"><img src="../img/back3.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)";></div>
</div>
<div class="row">
    <div class="container">
        <div class="section">
            <div class="row"> 
                <div class="col m6 l6 hide-on-small">
                    <img style="width: 440px; margin-top: 50px;" src="../img/server-client.jpg">
                </div>
                <div class="col s12 m6 l6 main-content">
                    <p>handles client request by generating responses to such requests.</p>
                    <p>hosted in a 'servlet container' that provides the environment in which the servlet runs, as well as controls the 'servlet lifecycle'.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="index-banner" class="notes_header parallax-container valign-wrapper">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <h1 class="header right white-text">Servlet Lifecycle</h1>
                </div>

            </div>
        </div>
    </div>
    <div class="parallax"><img src="../img/back5.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)";></div>
</div>
<div class="row">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m8 l8 main-content">
                    <ul>
                    <li><b>instantiation => constructor call:</b></li>
                        <li>creates an instance of the servlet to service client requests.</li>
                        <li>invoked implicity by the servlet container when the servlet is called upon to service a client request and no instance currently exists.</li>
                    </ul>
                    <ul>
                         <li><b>initialization => init() method:</b></li>
                         <li>invoked only once and is intended for any startup initialization code for the servlet.</li>
                    </ul>
                    <ul>
                        <li><b>request handling => service() method:</b></li>
                        <li>invoked for each client request.</li>
                        <li>servlet performs whatever logic necessary in order to serve the request and generate a response.</li>
                        <li>multiple client requests are typically handled by a single, multi threaded servlet instance; thus, care must be exercised to ensure that the code being run by the servlet is 'thread-safe'.</li>
                    </ul>
                    <ul>
                        <li><b>destruction => destroy() method:</b></li>
                        <li>invoked before the servlet instance is 'unloaded', and is intended for any 'housekeeping' code that the servlet may need to run.</li>
                    </ul>
                </div>
                <div class="col m4 l4 hide-on-small">
                    <img style="width: 300px;" src="../img/lifecycle.png">
                </div>
            </div>
        </div>
    </div>
</div>

<div id="index-banner" class="notes_header parallax-container valign-wrapper">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <h1 class="header left white-text">HTTPServlet</h1>
                </div>

            </div>
        </div>
    </div>
    <div class="parallax"><img src="../img/back4.jpg" alt="Unsplashed background img 1" style="filter: brightness(60%)";></div>
</div>
<div class="row">
    <div class="container">
        <div class="section">
            <div class="row"> 
                <div class="col s12 m10 l10 offset-m2 offset-l2 main-content">
                <ul>
                    <li>Java servlet used to handle HTTP requests and generate HTTP responses.</li>
                </ul>
                <ul>
                    <li>It is hosted in a 'Web container', which is a component in a Java 'application server' (e.g., Apache Tomcat, Red Har JBoss/WildFly, Oracle GlassFish, IBM WebSphere, etc.).</li>
                </ul>
                <ul>
                    <li>The service() method call is routed to a doXXX() call, depending on the HTTP request method, e.g., doGet(), doPost(), doHead(), doPut(), doDelete(), etc.</li>
                </ul>
                <ul>
                    <li>the doXXX() methods are passed two arguments:</li>
                    <li><b>HTTPServletRequest - </b>
                    object representation of the HTTP request sent by the client and received by the servlet.</li>
                    <li><b>HttpServletResponse - </b>
                    object representation of the HTTP reponse generated by the servlet and sent back to the requesting client.</li>
                    <li>used to set information in the response message (e.g., HTTP response status code, message headers, message payload, etc.).</li>
                </ul>
                <ul>
                     <li><b>Note: </b>the web container facilitates the conversion to and from the HTTP request/response message to HTTPServletRequest/HTTPServletResponse.</li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("../pagefragments/footer.html");