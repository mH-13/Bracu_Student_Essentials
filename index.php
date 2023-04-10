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
			<div class="col-md-3" style="font-size: 26px; color:#716da6; text-align: left">
            <a href="home.php">BRACU Student Essentials </a></div>
			
		</div>
	</section>
	
	<section id = "section1">
		<div class="title" style= " margin-right: 20px; margin-top:50px; margin-bottom:50px;"> SIGN IN </div>
		<form action="signin.php" class="form_design" method="post">
			Student ID: <input type="text" name="fname"> <br/>
			Password: <input type="password" name="pass"> <br/> <br/>
			<input type="submit" value="Submit">  
		</form>
        
        <div class="col-md-12" style="text-align: right"> 
        <p style="display: inline-block; text-align: left"> 
        New to BRACU Student Essentials? </p> <a href="signupform.php" style="color: #022E66"> Sign Up </a> 
        </div>
        
        <div class="title" style= "margin-top:100px; margin-bottom:128px;
            text-align:center;"> </div>
	</section>

	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
    </body> 
</html>
