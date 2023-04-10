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
                    <a href="show_students.php" style="margin-left: 20px;"> Students </a> 
                    <a href="show_studymaterials.php" style="margin-left: 20px;"> Study Materials </a> 
                    <a href="show_furnitures.php" style="margin-left: 20px;"> Furnitures  </a> 
                </div>
            </div>
        </section>
        <section id = "section1">
            <form method="post" action="search2.php" style="margin-bottom:10px">
            <input type="text" name="furniture" placeholder="furniture_type">
            <button type="submit" name="submit">Search</button>
            </form>

            <div class="title"> Furniture List </div>
            <div style="margin-left:10%; margin-right:10%; margin-top:10px; margin-bottom:10px;text-align:left; background:#ADA9BA;">
                <div class="row" style="padding:10px;"> 
                    <div class="col-md-2">  Advertised By </div>
                    <div class="col-md-4">  Discription </div>
                    <div class="col-md-3">  Contact </div>
                    <div class="col-md-2">  status </div>

            
                </div>
                
                <!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
                
                <?php 
                require_once("DBconnect.php");
                $sql = "SELECT * FROM Furnitures";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    //here we will print every row that is returned by our query $sql
                    while($row = mysqli_fetch_array($result)){
                    //here we have to write some HTML code, so we will close php tag
                ?>
                <div class="row" style="padding:10px;"> 
                    <div class="col-md-2">  <?php echo $row[0]; ?> </div>
                    <div class="col-md-4">  <?php echo $row[1]; ?> </div>
                    <div class="col-md-3">  <?php echo $row[2] ?> </div>
                    <div class="col-md-2">  <?php echo $row[3] ?> </div>

                </div>
                
                <?php 
                    }					
                }
                ?>
                <div class="title" style= "margin-left:5%; margin-right:20%; margin-top:200px; margin-bottom:200px;">  </div>
            </div>
            
            
            
            
            
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
