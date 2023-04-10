<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(!empty($_POST['sid']) && !empty($_POST['sname']) && !empty($_POST['semail']) && !empty($_POST['sdept']) && !empty($_POST['pass'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['sid'];
	$n = $_POST['sname'];
	$e = $_POST['semail'];
	$d = $_POST['sdept'];
	$p = $_POST['pass'];

	
	$sql1 = " INSERT INTO student VALUES( '$u', '$n', '$e', '$d' ) ";
	$sql2 = " INSERT INTO users VALUES( '$u', '$p') ";

	
	//Execute the query 
	$result1 = mysqli_query($conn, $sql1);
	$result2 = mysqli_query($conn, $sql2);

    echo "Your account have been created;. Please go back to Sign in page & Login now.";
	header("Location: index.php");

}
else{
    echo "Insertion Failed"; header("Location: signupform.php");
}


?>