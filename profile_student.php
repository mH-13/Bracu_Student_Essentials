<?php
// Get the username from the URL query string parameter
if (isset($_GET["userid"])) {
    $user_id = $_GET["userid"];
} 
else{
    // Redirect to the sign-in page if the username is not provided
    header("Location: signin.php");
    exit();
}
?>


<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="About the site"/>
        <meta name="author" content="Author name"/>
        <title> THE TITLE </title>
        
        <!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/font-awesome.min.css" rel="stylesheet"/>
        <link href="css/animate.min.css" rel="stylesheet"/>
        <link href="css/main.css" rel="stylesheet"/> 
    </head>

    <body> 
        <!-- following section is used for creating the menubar in the webpage -->
        <section id="header">
            <div class="row">  
                <div class="col-md-4" style="font-size: 30px;color:#716da6;"> BRACU Student Essentials </div>
                <div class="col-md-10" style="text-align: right; margin-left: 250px;"> 
                    <a href="home.php"> Home </a> 
                    <a href="show_upload.php?user_id=<?php echo urlencode($user_id);?>" style="margin-left: 20px;"> Uploads  </a> 
                    
                    <a href="show_studymaterials.php?user_id=<?php echo urlencode($user_id);?>" style="margin-left: 20px;"> Study Materials </a> 
                    <a href="show_furnitures.php?user_id=<?php echo urlencode($user_id);?>" style="margin-left: 20px;"> Furnitures  </a> 
                    

                </div>
            </div>
        </section>
        
        <section id = "section1">
            <div class="title"> Student Profile </div>
            <!--<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:30px;text-align:center;background:#ADA9BA;">
-->
<div style="margin-left: 10%; margin-right: 10%; margin-top: 50px; margin-bottom: 30px; text-align: center; background-color: rgba(173, 169, 186, 0.5);">

                <?php 
                require_once("DBconnect.php");
                $sql = "SELECT * FROM student WHERE S_id = '$user_id'";
                
                //Execute the query 
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    //here we will print every row that is returned by our query $sql
                    while($row = mysqli_fetch_array($result)){
                    //here we have to write some HTML code, so we will close php tag
                ?>


                <p style="font-size:20px; margin-top:30px"> Welcome, <?php echo $row[1]; ?> ! </p>
                
                <div class="container" style="text-align: left; margin-top:50px; color: #163B88">
                <!-- <img src="my-profile-pic.jpg" alt="Profile Picture"> -->
                <h1> <?php echo $row[1]; ?> </h1>
                <p style="font-size:20px"> <strong>ID:</strong> <?php echo $row[0]; ?> </p>
                <p style="font-size:20px"> <strong>Email:</strong> <?php echo $row[2] ?> </p>
                <p style="font-size:20px"> <strong>Department:</strong> <?php echo $row[3] ?> </p>
                
                <p style="font-size:20px"> <a href="my_study_materials.php?user_id=<?php echo urlencode($user_id);?>" > My Uploads </a> </p>
                <p style="font-size:20px"><a href="upload_study_materials_form.php?user_id=<?php echo urlencode($user_id);?> "> Upload New Materials </a></p>
                </div>
                    


                
                <?php 
                    }					
                }
                ?>
                <div class="title" style= "margin-left:5%; margin-right:20%; margin-top:120px; margin-bottom:130px;">  </div>
            </div>
                    
            
        </section>
        
        <!----- Footer ----->
        <footer style="background-color: white; color: #333; text-align: center; position: absolute; bottom: 0; width: 100%; padding: 20px 0;">
            &copy; 2023 My Website. All rights reserved.
        </footer>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/wow.min.js"></script>
    </body> 
</html>