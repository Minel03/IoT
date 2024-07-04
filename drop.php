<?php
$studentID = $_GET['studentnumber'];

include 'connect.php';

$query = "SELECT enrolled_students.id 
          FROM enrolled_students 
          JOIN subject_code ON enrolled_students.id = subject_code.enrolled_students_id 
          WHERE enrolled_students.studentnumber = $studentID AND schoolyear = 2022";

$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $studentId = $row['id'];
}
$query = "DELETE FROM enrolled_students WHERE studentnumber = $studentID";
$query2 = "DELETE FROM subject_code WHERE enrolled_students_id = $studentId";
$query3 = "DELETE FROM students WHERE id = $studentID";

if ($conn->query($query) === true && $conn->query($query2) === true && $conn->query($query3) === true) {
    echo '<script>alert("Student has been successfully remove!");</script>';
    echo '<script>window.location.href = "recordpage.php";</script>';
} else {
    echo "Error deleting student: " . $conn->error;
}
