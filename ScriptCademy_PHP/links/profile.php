<?php

session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");
    exit;
}

include("../pagefragments/header.php");
include("../pagefragments/nav.php");
?>

<div class="row">
    <div class="container">
        <div class="section">
            <div class="col s12 m4 l3">
                <?php
                if ($image_src == null) {
                    echo "<img src='../img/avatar.png' alt='Profile Image' class='circle responsive-img'>";
                } else {
                    echo "<img src=".$image_src." alt='Profile Image' class='circle responsive-img'>";
                }

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

                    }

                    header("profile.php");
                }
                ?>
                <form action="#" method="post" enctype='multipart/form-data'>
                    <div class="file-field input-field">
                        <div class="row">
                            <div class="col s8 offset-s2 m8 offset-m2 l8 offset-l2  blue darken-1 btn">
                                <span>Choose image</span>
                                <input type="file" name="file">
                            </div>
                            <div class="col s8 offset-s2 m8 offset-m2 l8 offset-l2 file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>


                        </div>
                    </div>
                    <div class="col s10 offset-s1 m10 offset-m1 l12 offset-l1">
                        <button class="btn blue darken-1" type="submit" name="uploadimage">Upload
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col s12 m8 l9">
                <h3>Account Information:</h3>
                <h5><span><i class="small material-icons">assignment_ind</i></span>Name: <span style="font-weight: 300;"><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></span></h5>
                <h5><span><i class="small material-icons">assignment_ind</i></span>Username: <span style="font-weight: 300;"><?php echo $_SESSION['username']; ?></span></h5>
                <h5><span><i class="small material-icons">email</i></span>Email address: <span style="font-weight: 300;"><?php echo $_SESSION['email']; ?></span></h5>
                <br>
                <hr>
                <h3>Quiz Scores:</h3>
                <div class="row">
                    <div class="col s12 m5 l6">
                        <?php 

                        $query = "select * from user_accounts where user_id =".$_SESSION['user_id'].";";

                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_assoc($result);

                        $servlets_score = $row['servlets_score'];
                        $php_score = $row['php_score'];
                        $nodejs_score = $row['nodejs_score'];


                        echo "<h5>Servlets: <span>";
                        if ($servlets_score == null){
                            echo "<span class='pnotice'>You didn't take the quiz yet.</span></span>
                        <h5><a href='quiz?quiz=Servlets'>Take the quiz</a></h5>";
                        } else {
                            echo $servlets_score."</span></h5>";
                            echo "<h5><a href='quiz?quiz=Servlets'>Retake the quiz</a></h5>"; 
                        }

                        echo "<h5>PHP: <span>";
                        if ($php_score == null){
                            echo "<span class='pnotice'>You didn't take the quiz yet.</span></span>
                        <h5><a href='quiz?quiz=PHP'>Take the quiz</a></h5>";
                        } else {
                            echo $php_score."</span></h5>";
                            echo "<h5><a href='quiz?quiz=PHP'>Retake the quiz</a></h5>"; 
                        }

                        echo "<h5>NodeJS: <span>";
                        if ($nodejs_score == null){
                            echo "<span class='pnotice'>You didn't take the quiz yet.</span></span>
                        <h5><a href='quiz?quiz=NodeJS'>Take the quiz</a></h5>";
                        } else {
                            echo $nodejs_score."</span></h5>";
                            echo "<h5><a href='quiz?quiz=NodeJS'>Retake the quiz</a></h5>"; 
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php
include("../pagefragments/footer.html");
