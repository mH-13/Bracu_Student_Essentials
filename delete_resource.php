<?php
// Connect to database
require_once 'DBconnect.php';

// Get resource ID from GET request
$resource_id = $_POST["resource_id"];

// Delete resource from database
$sql = "DELETE FROM study_materials2 WHERE resource_id = $resource_id";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Resource deleted successfully.";
} else {
    echo "Error deleting resource.";
}

// Close database connection
mysqli_close($conn);
?>
