<?php
include 'connect.php';

// Get form data
$studentnumber = $_POST['studentnumber'];
$course = $_POST['course'];
$age = $_POST['age'] + 1;

$startYear = '2022';
$endYear = $startYear + 1;

// Insert data into the 'enrolled_students' table
$sql1 = "INSERT INTO enrolled_students (id, studentnumber, course, year, schoolyear) 
                 VALUES (DEFAULT, '$studentnumber', '$course', 4, '$startYear - $endYear')";

// Execute the second query
$result1 = mysqli_query($conn, $sql1);
if ($result1) {
    // Get the ID of the inserted row
    $enrolledStudentsId = mysqli_insert_id($conn);

    if ($course === "1") {
        $code = "BDA";
        $code1 = "MWS";
        $code2 = "SPI";
        $code3 = "FIT4";
    } elseif ($course === "2") {
        $code = "CNS";
        $code1 = "SECP";
        $code2 = "RW";
        $code3 = "FIT4";
    } elseif ($course === "3") {
        $code = "HSC";
        $code1 = "AR";
        $code2 = "NM";
        $code3 = "FIT4";
    } else {
        die("Invalid course");
    }

    // Construct the SQL query for $sql2
    $sql2 = "INSERT INTO subject_code (id, enrolled_students_id, code) 
             VALUES (DEFAULT, '$enrolledStudentsId', '$code'), (DEFAULT, '$enrolledStudentsId', '$code1'), (DEFAULT, '$enrolledStudentsId', '$code2'), (DEFAULT, '$enrolledStudentsId', '$code3')";

    // Execute the third query
    $result2 = mysqli_query($conn, $sql2);
    if ($result2) {
        // Success! Both queries executed successfully.

        // Update the age in the 'students' table
        $updateSql = "UPDATE students SET age = '$age' WHERE id = '$studentnumber'";
        $result3 = mysqli_query($conn, $updateSql);

        if ($result3) {
            echo '<script>alert("Enrollment successful!");</script>';
            echo '<script>window.location.href = "admin-dashboard.php";</script>';
        } else {
            echo "Error updating age in students table: " . mysqli_error($conn);
        }
    } else {
        echo "Error inserting data into subject_code table: " . mysqli_error($conn);
    }
} else {
    echo "Error inserting data into enrolled_students table: " . mysqli_error($conn);
}
// Close the database connection
mysqli_close($conn);
