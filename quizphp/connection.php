<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'webtek';
  $dsn = "mysql:host=$host;dbname=$db";

  $pdo = new PDO($dsn, $user, $pass);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
?>