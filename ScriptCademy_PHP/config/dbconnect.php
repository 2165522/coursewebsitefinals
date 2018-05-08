<?php
//MySQLi connection
$link = new mysqli("p:localhost","root","","scriptcademy");

// Check connection for any errors
if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
?>