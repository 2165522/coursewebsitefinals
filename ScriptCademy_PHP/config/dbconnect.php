<?php
$con = new mysqli("p:localhost", "root", "", "scriptcademy");

if ($con->connect_error){
    die("Connection failed: ".$con->connect_error);
}
?>