

<?php
	// Connect to database
	require_once 'DBconnect.php';

	// Get resource ID from POST request
	$resource_id = $_POST["resource_id"];

	// Select resource from database
	$sql = "SELECT * FROM study_materials2 WHERE resource_id = $resource_id";
	$result = mysqli_query($conn, $sql);

	// Display current resource info and form to edit it
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();

		echo "<p><b>Current Course Code:</b> " . $row["course_code"] . "</p>";
		echo "<p><b>Current Resource:</b> " . $row["resource_name"] . "</p>";

		echo "<form action='update_resource.php' method='post' enctype='multipart/form-data'>";
		echo "<input type='hidden' name='resource_id' value='" . $row["resource_id"] . "'>";
		echo "<label for='course_code'>Course Code:</label>";
		echo "<input type='text' id='course_code' name='course_code' value='" . $row["course_code"] . "'><br>";
		echo "<label for='resource_file'>New Resource:</label>";
		echo "<input type='file' id='resource_file' name='resource_file'><br>";
		echo "<input type='submit' value='Update'>";
		echo "</form>";
	} else {
		echo "<p>Resource not found.</p>";
	}

	// Close database connection
	mysqli_close($conn);
?>


