<?php
require_once 'DBconnect.php';
$user_id = $_GET['user_id'];

// Get the file data from the database
$sql = "SELECT * FROM study_materials2 WHERE student_id = '$user_id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
    $file_name = $row['resource_name'];
    $file_data = base64_decode($row['resources']);
    
    // Send the file data to the browser as a downloadable file
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . $file_name . '.pdf"');
    header('Content-Length: ' . strlen($file_data));
    echo $file_data;
} else {
    echo 'Error: File not found.';
}
?>
