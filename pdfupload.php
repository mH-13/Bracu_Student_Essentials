<?php
// first of all, we need to connect to the database
require_once 'dbconnect.php';
$user_id = '20301061';
$course_code = $_POST['course_code'];

// Check if the file was uploaded without errors
if(isset($_FILES["pdf_file"]) && $_FILES["pdf_file"]["error"] == 0){
    $pdf_name = $_FILES['pdf_file']['name'];
    $pdf_tmp_name = $_FILES['pdf_file']['tmp_name'];
    $pdf_type = $_FILES['pdf_file']['type'];
    $pdf_size = $_FILES['pdf_file']['size'];
    echo $pdf_tmp_name;
    
    // Check if the file is a PDF
    $allowed_types = array('application/pdf');
    if(!in_array($pdf_type, $allowed_types)){
        echo 'Error: File type not allowed. Please upload a PDF file.';
    } else {
        // Base64-encode the file contents
        $pdf_contents = base64_encode(file_get_contents($pdf_tmp_name));
        
        // Insert the file information into the database
        $sql = "INSERT INTO study_materials (student_id, course_code, resource_name, resources) VALUES ('$user_id', '$course_code', '$pdf_name', '$pdf_contents')";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            echo 'File uploaded successfully.';
        } else {
            echo 'Error: File not uploaded. Please try again.';
        }
    }
} else {
    echo 'Error: ' . $_FILES["pdf_file"]["error"];
}
?>

<a href="download_pdf.php?file_id=<?php echo $user_id;?>">Download PDF</a>