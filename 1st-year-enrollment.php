<!DOCTYPE html>
<html>

<head>
	<title>School Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/enroll.css">
</head>

<body>
	<div class="container-head">
		<h1>School Registration Form for 1st Year</h1>
	</div>
	<form name="enrollmentForm" action="connect1st.php" method="POST" onsubmit="return validateForm()">

		<label for="course">Course:</label>
		<select id="course" name="course" required>
			<option value="">Select Course</option>
			<option value="1">Bachelor of Science in Information Technology(BSIT)</option>
			<option value="2">Bachelor of Science in Computer Science(BSCS)</option>
			<option value="3">Bachelor of Science in Computer Engineering(BSCE)</option>
		</select>

		<label for="fullname">Full Name:</label>
		<input type="text" id="fullname" name="fullname" placeholder="Full Name" required>

		<label for="age">Age:</label>
		<input type="text" id="age" name="age" placeholder="Age" required maxlength="2">

		<label for="gender">Gender:</label>
		<select id="gender" name="gender" required>
			<option value="">Select Sex</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select>

		<label for="birthday">Birthday:</label>
		<input type="date" id="birthday" name="birthday" required>

		<label for="address">Address:</label>
		<input type="text" id="address" name="address" placeholder="Full Address" required>

		<label for="placeofbirth">Place of Birth:</label>
		<input type="text" id="placeofbirth" name="placeofbirth" placeholder="Place of Birth" required>

		<label for="fathername">Father's Name: </label>
		<input type="text" id="fathername" name="fathername" placeholder="Father's Name" required>

		<label for="mothername">Mother's Information: </label>
		<input type="text" id="mothername" name="mothername" placeholder="Mother's Name" required>

		<label for="guardianname">Guardian's Information: </label>
		<input type="text" id="guardianname" name="guardianname" placeholder="Guardian's Name" required>

		<button class="btn" onclick="goReset()">Reset</button>
		<script src="js/button.js"></script>&nbsp;
		<button class="btn" onclick="goBack()">Cancel</button>
		<script src="js/button.js"> </script>&nbsp;
		<button type="submit" class="btn">Submit</button>

	</form>

	</div>
	</div>
</body>

</html>