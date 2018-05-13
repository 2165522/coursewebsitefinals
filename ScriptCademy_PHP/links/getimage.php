<?php

include("../config/dbconnect.php");
$sql = "select image from user_accounts where user_id=".$_SESSION['user_id'].";";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image_src = $row['image'];

?>