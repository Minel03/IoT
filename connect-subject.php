<?php
$studentID = $_POST['studentID'];
$codes = $_POST['code'];
$destinationPage = 'regform.php?studentnumber=' . urlencode($studentID);
include 'connect.php';

$query = "SELECT enrolled_students.id 
          FROM enrolled_students 
          JOIN subject_code ON enrolled_students.id = subject_code.enrolled_students_id 
          WHERE enrolled_students.studentnumber = $studentID AND schoolyear = 2022";

$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $studentID = $row['id'];
}

foreach ($codes as $code) {
    // Convert $code to an array if it is not already
    if (!is_array($code)) {
        $code = [$code];
    }

    // Loop through each value in the code array and execute separate queries
    foreach ($code as $value) {
        $query = "INSERT INTO subject_code (id, enrolled_students_id, code) 
                  VALUES (DEFAULT, '$studentID', '$value')";

        // Execute the query
        if ($conn->query($query) === true) {
            echo '<script>alert("Subject Enrolled Successfuly!");</script>';
            echo '<script>window.location.href = "' . $destinationPage . '";</script>';
        } else {
            echo "Error inserting value: " . $conn->error;
        }
    }
}


// Closing the database connection
$conn->close();
