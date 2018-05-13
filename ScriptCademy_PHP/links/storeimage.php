<?php
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");
    exit;
}
include("../config/dbconnect.php");

if(isset($_POST['uploadimage'])){

    $name = $_FILES['file']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");

    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){

        // Convert to base64 
        $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
        $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
        // Insert record

        $query = 'update user_accounts set image = "'.$image.'" where user_id = '.$_SESSION['user_id'].';';
        mysqli_query($con,$query);
        
        header("profile.php");
    }
}
?>