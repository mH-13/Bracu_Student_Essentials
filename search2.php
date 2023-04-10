<?php
// Connect to the database
require_once('DBconnect.php');

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the search term from the form
    $c = $_POST['furniture'];
    //echo "$c";
    // Build the SQL query
    $query = "SELECT * FROM Furnitures WHERE discription like '%$c%'";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
        // Loop through the rows and display the filenames
        while ($row = mysqli_fetch_assoc($result)) {
        // echo $row[0] . '<br>';
        //echo '<pre>';
        //print_r($row);
        // echo $row['file'];
        // echo "</br>";
        ?>
        <div class="row" style="padding:10px;"> 
            <div class="col-md-2">  <?php echo $row['u_id']; ?> </div>
            <div class="col-md-4">  <?php echo $row['discription']; ?> </div>
            <div class="col-md-3">  <?php echo $row['contact'] ?> </div>
            <div class="col-md-3">  <?php echo $row['status'] ?> </div>

        </div>
        
        <?php 
        }
    } else {
        echo "No results found.";
    }
}

// Close the database connection
mysqli_close($conn);
?>
