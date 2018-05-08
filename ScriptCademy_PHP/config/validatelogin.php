<?php
include("dbconnect.php");
session_start();

//check whether data with the session name username has already been created
//if so redirect to hhomepage


//check whether data with the name username has been submitted
if (isset($_POST['username'])) {

	//variables to hold our submitted data with post
	$username = $_POST['username'];
        //Encrypting our login password
	$pass = md5($_POST['password']);

	//our sql statement that we will execute
	$sql = "SELECT * FROM user WHERE username='$username' AND password='$pass'";

	//Executing the sql query with the connection
	$re = mysqli_query($con, $sql);

	//check to see if there is any record / row in the database
	//if there is then the user exists
	if (mysqli_num_rows($re)) {
		//echo "Welcome";
		//creating a session name with username ad inserting the submitted username
		$_SESSION['username'] = $username;

		//redirecting to homepage
		header("Location: index.php");
	}else{
		//display error if no record exists
		echo "Error : Invalid Login Credentials";
	}
}
?>