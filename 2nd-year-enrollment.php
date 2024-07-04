<!DOCTYPE html>
<html>

<head>
	<title>School Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/enroll.css">

</head>

<body>
	<!-- HTML code for 2nd-year-enrollment.php -->
	<div class="box">
		<form method="post">
			<label for="studentnumber">Select a student number:</label>
			<select name="studentnumber" id="studentnumber">
				<?php
				include 'connect.php';

				// Retrieve the student numbers from the enrolled_students table
				$query = "SELECT studentnumber FROM enrolled_students WHERE year = 1 AND schoolyear = 2021 AND studentnumber NOT IN (SELECT studentnumber FROM enrolled_students WHERE year = 2)";
				$result = mysqli_query($conn, $query);

				// Fetch each row from the result set and populate the dropdown menu
				while ($row = mysqli_fetch_assoc($result)) {
					echo '<option value="' . $row['studentnumber'] . '">' . $row['studentnumber'] . '</option>';
				}
				?>
			</select>
			<input type="submit" value="Submit">
		</form>
		<form action="admin-dashboard.php" method="post">
			<button class="admin_btn">Back</button>
		</form>
	</div>

	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Check if the student number is selected and submitted
		if (isset($_POST['studentnumber'])) {
			// Retrieve the selected student number
			$selectedStudentNumber = $_POST['studentnumber'];

			// Query the students table to get the enrollment form details for the selected student
			$enrollmentQuery = "SELECT * FROM students WHERE id = '$selectedStudentNumber'";
			$enrollmentResult = mysqli_query($conn, $enrollmentQuery);

			// Assuming you have an enrollment form table with the respective columns
			$enrollmentRow = mysqli_fetch_assoc($enrollmentResult);

			// Check if the enrollmentRow is not empty to display the enrollment form details
			if ($enrollmentRow) {
				echo '<h2>Enrollment Form</h2>';
				echo '<form method="post" action="connect2nd.php">';
				$courseQuery = "SELECT course FROM enrolled_students WHERE studentnumber = '$selectedStudentNumber'";
				$courseResult = mysqli_query($conn, $courseQuery);
				echo '<p>Student Number: ' . $selectedStudentNumber . '';
				echo '<input type="hidden" name="studentnumber" value="' . $selectedStudentNumber . '">';
				$courseRow = mysqli_fetch_assoc($courseResult);
				if ($courseRow) {
					$course = '';
					switch ($courseRow['course']) {
						case 1:
							$course = 'BSIT';
							break;
						case 2:
							$course = 'BSCS';
							break;
						case 3:
							$course = 'BSCE';
							break;
					}
					echo '<p>Course: ' . $course . '</p>';
					echo '<input type="hidden" name="course" value="' . $courseRow['course'] . '">';
				}
				echo '<p>Full Name: ' . $enrollmentRow['fullname'] . '</p>';
				echo '<p>Age: ' . $enrollmentRow['age'] . '</p>';
				echo '<input type="hidden" name="age" value="' . $enrollmentRow['age'] . '">';
				echo '<p>Gender: ' . $enrollmentRow['gender'] . '</p>';
				echo '<p>Birthday: ' . $enrollmentRow['birthday'] . '</p>';
				echo '<p>Address: ' . $enrollmentRow['address'] . '</p>';
				echo '<p>Place of Birth: ' . $enrollmentRow['placeofbirth'] . '</p>';
				echo '<p>Father\'s Name: ' . $enrollmentRow['fathername'] . '</p>';
				echo '<p>Mother\'s Name: ' . $enrollmentRow['mothername'] . '</p>';
				echo '<p>Guardian Name: ' . $enrollmentRow['guardianname'] . '</p>';
				echo '<input type="submit" value="Submit">';
				echo '</form>';
			} else {
				echo '<p>No enrollment form details found for the selected student number.</p>';
			}
		} else {
			echo '</form>';
		}
	}
	?>


</body>

</html>