<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
echo " hey $u";
if(isset($_POST['fname']) && isset($_POST['pass'])){
    
    var_dump($_POST);
    // write the query to check if this username and password exists in our database
    $u = $_POST['fname'];
    $p = $_POST['pass'];
    $sql = "SELECT * FROM users WHERE userid = '$u' AND password = '$p'";
    
    //new code.......................
    //$id = 123; // Replace with your own ID variable
    $url = "upload_study_materials_form.php?id=$u";
    header("Location: $url");



    //Execute the query 
    $result = mysqli_query($conn, $sql);
    
    //check if it returns an empty set
    if(mysqli_num_rows($result) > 0 ){
        if ($u==20301091){
            header("Location: profile_admin.php?userid=".urlencode($u));
            //header("Location: upload_study_materials_form.php?userid=".urlencode($u));
            //header("Location: upload_study_materials.php?userid=".urlencode($u));

            
            }
            
        else{
            header("Location: profile_student.php?userid=".urlencode($u));
            //header("Location: upload_study_materials_form.php?userid=".urlencode($u));
           // header("Location: upload_study_materials.php?userid=".urlencode($u));

        }
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