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
                <div class="col-md-4" style="font-size: 30px;color:#716da6;"> BRACU Studen Essentials </div>
                <div class="col-md-10" style="text-align: right"> 
                    <a href="index.php"> Sign In </a> 
                    
                </div>
            </div>
        </section>
        
        <section id = "section1">
            <div class="title"> Sign Up  </div>
            
            <form action="insert_student.php" class="form_design" method="post">
                ID: <input type="text" name="sid"> <br/>
                Name: <input type="text" name="sname"> <br/> 
                Email: <input type="text" name="semail"> <br/>
                Department: <input type="text" name="sdept"> <br/>
                Password: <input type="password" name="pass"> <br/>

                <br/>
                <input type="submit" value="Submit">
            </form>
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
