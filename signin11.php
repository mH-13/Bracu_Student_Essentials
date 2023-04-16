<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['fname']) && isset($_POST['pass'])){
	
    var_dump($_POST);
    // write the query to check if this username and password exists in our database
	$u = $_POST['fname'];
	$p = $_POST['pass'];
	$sql = "SELECT * FROM users WHERE userid = '$u' AND password = '$p'";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if it returns an empty set
	if(mysqli_num_rows($result) > 0 ){
        header("Location: profile.php?userid=".urlencode($u));
		//header("Location: profile.php");
	}
	else{
        header("Location: index.php");
		echo "UserId or Password is Incorrect";
	}
	
}
else{

    echo "Please type your Student Id and Password.";
}

?>

