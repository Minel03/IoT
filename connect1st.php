<?php
include 'connect.php';

// Get form data
$course = $_POST['course'];
$fullname = $_POST['fullname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$placeofbirth = $_POST['placeofbirth'];
$fathername = $_POST['fathername'];
$mothername = $_POST['mothername'];
$guardianname = $_POST['guardianname'];

// Insert data into the 'students' table
$sql1 = "INSERT INTO students (id, fullname, age, gender, birthday, address, placeofbirth, fathername, mothername, guardianname) 
         VALUES (DEFAULT, '$fullname', '$age', '$gender', '$birthday', '$address', '$placeofbirth', '$fathername', '$mothername', '$guardianname')";

// Execute the first query
$result1 = mysqli_query($conn, $sql1);
if ($result1) {
    // Get the ID of the inserted row
    $insertid = mysqli_insert_id($conn);

    $startYear = '2021';
    $endYear = $startYear + 1;

    // Insert data into the 'enrolled_students' table
    $sql2 = "INSERT INTO enrolled_students (id, studentnumber, course, year, schoolyear) 
                 VALUES (DEFAULT, '$insertid', '$course', 1, '$startYear - $endYear')";

    // Execute the second query
    $result2 = mysqli_query($conn, $sql2);
    if ($result2) {
        // Get the ID of the inserted row
        $enrolledStudentsId = mysqli_insert_id($conn);

        if ($course === "1") {
            $code = "MIT";
            $code1 = "NF";
            $code2 = "P";
            $code3 = "FIT1";
        } elseif ($course === "2") {
            $code = "IP";
            $code1 = "DM";
            $code2 = "E";
            $code3 = "FIT1";
        } elseif ($course === "3") {
            $code = "IP";
            $code1 = "CA";
            $code2 = "AA";
            $code3 = "FIT1";
        } else {
            die("Invalid course");
        }

        // Construct the SQL query for $sql3
        $sql3 = "INSERT INTO subject_code (id, enrolled_students_id, code) 
                     VALUES (DEFAULT, '$enrolledStudentsId', '$code'), (DEFAULT, '$enrolledStudentsId', '$code1'), (DEFAULT, '$enrolledStudentsId', '$code2'), (DEFAULT, '$enrolledStudentsId', '$code3')";

        // Execute the third query
        $result3 = mysqli_query($conn, $sql3);
        if ($result3) {
            // Success! Both queries executed successfully.
            echo '<script>alert("Enrollment successful!");</script>';
            // Perform any additional actions or display success message
            echo '<script>window.location.href = "admin-dashboard.php";</script>';
        } else {
            // Error executing the second query
            echo "Error inserting data into enrolled_students table: " . mysqli_error($conn);
        }
    }
}
// Close the database connection
mysqli_close($conn);
