<!DOCTYPE html>
<html>
<head>
	<title>Study Materials</title>
	<style>
		table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
		}
		th, td {
		padding: 5px;
		}
        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .action-btn {
            margin: 5px;
            padding: 5px;
            border: none;
            border-radius: 5px;
            color: #fff;
            background-color: #008CBA;
            cursor: pointer;
        }
        .action-btn:hover {
            background-color: #006080;
        }
	</style>
</head>
<body>
	<h1>Study Materials</h1>

	<table>
		<tbody>
			<?php
				// Connect to database
				require_once 'DBconnect.php';
				$user_id = $_GET["user_id"];
				echo $user_id;

				// Check for errors

				// Select all resources from table
				$sql = "SELECT * FROM study_materials2 WHERE student_id = $user_id";
				$result = mysqli_query($conn, $sql);

				// Loop through each row and display resource info and actions
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $row["course_code"] . "</td>";
						echo "<td>" . $row["resource_name"] . "</td>";
                        echo "<td class='actions'>";
						echo "<form action='edit_resource.php' method='post'>";
						echo "<input type='hidden' name='resource_id' value='" . $row["resource_id"] . "'>";
						echo "<input class='action-btn' type='submit' value='Edit'>";
						echo "</form>";
						echo "<form action='delete_resource.php' method='post'>";
						echo "<input type='hidden' name='resource_id' value='" . $row["resource_id"] . "'>";
						echo "<input class='action-btn' type='submit' value='Remove'>";
						echo "</form>";
                        echo "</td>";
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='2'>No study materials found.</td></tr>";
				}

				// Close database connection
			?>
		</tbody>
	</table>

</body>
</html>
