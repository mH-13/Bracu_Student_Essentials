<?php
$user_id = $_GET["user_id"];
echo " $user_id";
?>

<form action="upload_study_materials.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
	<div class="form-input py-2">
		<div class="form-group">
		<input type="text" class="form-control" name="course_code"
				placeholder="Enter course code" required>
		</div>

		<div class="form-group">
		<input type="text" class="form-control" name="resource_type"
				placeholder="Enter resource type" required>
		</div>

		<div class="form-group">
		<input type="file" name="pdf_file"
				class="form-control" accept=".pdf"
				title="Upload PDF"/>
		</div>
		<div class="form-group">
		<input type="submit" class="btnRegister"
				name="submit" value="Submit">
		</div>
</div>
</form>



