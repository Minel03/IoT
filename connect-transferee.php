<?php
include 'connect.php';

// Get form data
$course = $_POST['course'];
$year = $_POST['year'];
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
$sql1 = "INSERT INTO students (id, fullname, gender, birthday, address, placeofbirth, fathername, mothername, guardianname) 
         VALUES (DEFAULT, '$fullname', '$gender', '$birthday', '$address', '$placeofbirth', '$fathername', '$mothername', '$guardianname')";

// Execute the first query
$result1 = mysqli_query($conn, $sql1);
if ($result1) {
    // Get the ID of the inserted row
    $insertid = mysqli_insert_id($conn);

    $startYear = '2022';
    $endYear = $startYear + 1;

    // Insert data into the 'enrolled_students' table
    $sql2 = "INSERT INTO enrolled_students (id, studentnumber, course, year, schoolyear) 
                 VALUES (DEFAULT, '$insertid', '$course', $year, '$startYear - $endYear')";

    // Execute the second query
    $result2 = mysqli_query($conn, $sql2);
    if ($result2) {
        // Get the ID of the inserted row
        $enrolledStudentsId = mysqli_insert_id($conn);

        if ($course === "1" && $year === "1") {
            $code = "MIT";
            $code1 = "NF";
            $code2 = "P";
            $code3 = "FIT1";
        } elseif ($course === "1" && $year === "2") {
            $code = "OOP";
            $code1 = "NS";
            $code2 = "UTS";
            $code3 = "FIT2";
        } elseif ($course === "1" && $year === "3") {
            $code = "DA";
            $code1 = "CS";
            $code2 = "CW";
            $code3 = "FIT3  ";
        } elseif ($course === "1" && $year === "4") {
            $code = "BDA";
            $code1 = "MWS";
            $code2 = "SPI";
            $code3 = "FIT4";
        } elseif ($course === "2" && $year === "1") {
            $code = "IP";
            $code1 = "DM";
            $code2 = "E";
            $code3 = "FIT1";
        } elseif ($course === "2" && $year === "2") {
            $code = "OOP";
            $code1 = "SE";
            $code2 = "D";
            $code3 = "FIT2";
        } elseif ($course === "2" && $year === "3") {
            $code = "ADSA";
            $code1 = "CG";
            $code2 = "GS";
            $code3 = "FIT3";
        } elseif ($course === "2" && $year === "4") {
            $code = "CNS";
            $code1 = "SECP";
            $code2 = "RW";
            $code3 = "FIT4";
        } elseif ($course === "3" && $year === "1") {
            $code = "IP";
            $code1 = "CA";
            $code2 = "AA";
            $code3 = "FIT1";
        } elseif ($course === "3" && $year === "2") {
            $code = "DSD";
            $code1 = "OS";
            $code2 = "E";
            $code3 = "FIT2";
        } elseif ($course === "3" && $year === "3") {
            $code = "CNP";
            $code1 = "RA";
            $code2 = "MS";
            $code3 = "FIT3";
        } elseif ($course === "3" && $year === "4") {
            $code = "HSC";
            $code1 = "AR";
            $code2 = "NM";
            $code3 = "FIT4";
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
