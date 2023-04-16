<?php
require_once 'DBconnect.php';

$resource_id = $_POST["resource_id"];
$course_code = $_POST["course_code"];

if (!empty($resource_id)) {
	$sql1 = "UPDATE study_materials2 SET course_code = '$course_code' WHERE resource_id = $resource_id";
	$result1 = mysqli_query($conn, $sql1);
	if ($result1) {
		echo "course_code edited successfully\n";
	}
	else {
		echo "Something error occured";
	}
	
}


if(isset($_FILES["resource_file"]) && $_FILES["resource_file"]["error"] == 0){
    $pdf_name = $_FILES['resource_file']['name'];
    $pdf_tmp_name = $_FILES['resource_file']['tmp_name'];
    $pdf_type = $_FILES['resource_file']['type'];
    $pdf_size = $_FILES['resource_file']['size'];
    
    // Check if the file is a PDF
    $allowed_types = array('application/pdf');
    if(!in_array($pdf_type, $allowed_types)){
        echo 'Error: File type not allowed. Please upload a PDF file.';
    } else {
        // Base64-encode the file contents
        $pdf_contents = base64_encode(file_get_contents($pdf_tmp_name));
        
        // Insert the file information into the database
        $sql2 = "UPDATE study_materials2 SET resource_name = '$pdf_name',resources = '$pdf_contents' WHERE resource_id = $resource_id";
        $result2 = mysqli_query($conn, $sql2);
        
        if($result2){
            echo "	File edited successfully";
        } else {
            echo 'Error: File not uploaded. Please try again.';
        }
    }
} else {
    echo 'Error: ' . $_FILES["resource_file"]["error"];
}
?>
