<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/regform.css">
    <title>Registration Form</title>

    <div class="container1">
        <form action="recordpage.php" method="post">
            <button class="admin_btn">Back</button>
        </form>
    </div>
</head>

<body>
    <h2>Registration Form</h2>

    <?php
    // Assuming you have a database connection established
    include 'connect.php';

    // Define the Subject class
    class Subject
    {
        private $code;

        public function __construct($code)
        {
            $this->code = $code;
        }

        public function getMeaning()
        {
            // Perform a lookup or mapping to retrieve the meaning based on the subject code
            $meanings = [
                'IP' => 'Introduction to Programming',
                'DM' => 'Discrete Mathematics',
                'FIT1' => 'FITT1',
                'E' => 'Ethics',
                'OOP' => 'Object-Oriented Programming',
                'SE' => 'Software Engineering',
                'FIT2' => 'FITT2',
                'D' => 'Dalumat',
                'ADSA' => 'Advanced Data Structures and Algorithms',
                'CG' => 'Computer Graphics',
                'FIT3' => 'FITT3',
                'GS' => 'Gender and Society',
                'CNS' => 'Cryptography and Network Security',
                'SECP' => 'Software Engineering Capstone Project',
                'RW' => 'Rizal Works',
                'FIT4' => 'FITT4',
                'MIT' => 'Mathematics for IT',
                'NF' => 'Networking Fundamentals',
                'P' => 'Panitikan',
                'NS' => 'Networking and Security',
                'UTS' => 'Undestanding the Self',
                'DA' => 'Data Analytics',
                'CS' => 'Cybersecurity',
                'CW' => 'Contemporary World',
                'BDA' => 'Big Data Analytics',
                'MWS' => 'Mobile and Web Security',
                'SPI' => 'Social and Professional Issues',
                'CA' => 'Circuit Analysis',
                'AA' => 'Art Appreciation',
                'DSD' => 'Digital Systems Design',
                'OS' => 'Operating Systems',
                'E' => 'Ethics',
                'CNP' => 'Computer Networks and Protocols',
                'RA' => 'Robotics and Automation',
                'MS' => 'Multimedia System',
                'HSC' => 'Hardware/Software Co-design',
                'AR' => 'Advanced Robotics',
                'NM' => 'Network Management'
                // Add more subject code - meaning mappings as needed
            ];

            if (isset($meanings[$this->code])) {
                return $meanings[$this->code];
            } else {
                return 'Meaning not found';
            }
        }
    }

    // Check if the studentnumber parameter exists in the URL
    if (isset($_GET['studentnumber'])) {
        $studentNumber = $_GET['studentnumber'];

        // Retrieve student data from the "students" table based on studentnumber
        $query = "SELECT * FROM students WHERE id = '$studentNumber'";
        $result = mysqli_query($conn, $query);

        // Check if the student exists
        if (mysqli_num_rows($result) > 0) {
            // Fetch the student details
            $row = mysqli_fetch_assoc($result);

            $studentId = $row['id'];
            $destinationPage = 'add-subject.php?studentnumber=' . urlencode($studentId);
            $fullName = $row['fullname'];
            $gender = $row['gender'];
            $birthday = $row['birthday'];
            $address = $row['address'];
            $placeOfBirth = $row['placeofbirth'];
            $fatherName = $row['fathername'];
            $motherName = $row['mothername'];
            $guardianName = $row['guardianname'];

            // Retrieve enrollment data for the student from the "enrolled_students" table
            $enrollmentQuery = "SELECT course, year FROM enrolled_students WHERE studentnumber = '$studentId' AND schoolyear = 2022";
            $enrollmentResult = mysqli_query($conn, $enrollmentQuery);
            $enrollmentData = mysqli_fetch_assoc($enrollmentResult);
            $course = $enrollmentData['course'];
            $year = $enrollmentData['year'];

            // Generate the form layout
            echo '<div class="container2">';
            echo "<h3>Student Number: $studentNumber</h3>";
            echo "<table>";
            echo "<tr><td>Course:</td><td>";

            // Printing the course based on its value
            if ($course == 1) {
                echo "BSIT";
            } elseif ($course == 2) {
                echo "BSCS";
            } elseif ($course == 3) {
                echo "BSCE";
            }

            echo "</td></tr>";

            echo "<tr><td>Year:</td><td>$year</td></tr>";
            echo "<tr><td>Student:</td><td>$fullName</td></tr>";
            echo "<tr><td>Gender:</td><td>$gender</td></tr>";
            echo "<tr><td>Birthday:</td><td>$birthday</td></tr>";
            echo "<tr><td>Address:</td><td>$address</td></tr>";
            echo "<tr><td>Place of Birth:</td><td>$placeOfBirth</td></tr>";
            echo "<tr><td>Father's Name:</td><td>$fatherName</td></tr>";
            echo "<tr><td>Mother's Name:</td><td>$motherName</td></tr>";
            echo "<tr><td>Guardian's Name:</td><td>$guardianName</td></tr>";
            echo "</table>";

            // Retrieve subject codes for the enrolled student
            $subjectQuery = "SELECT code FROM subject_code WHERE enrolled_students_id IN (SELECT id FROM enrolled_students WHERE studentnumber = '$studentId' AND schoolyear = 2022)";
            $subjectResult = mysqli_query($conn, $subjectQuery);

            if (mysqli_num_rows($subjectResult) > 0) {
                echo "<h4>Subject Codes:</h4>";
                echo "<ul>";

                while ($subjectRow = mysqli_fetch_assoc($subjectResult)) {
                    $code = $subjectRow['code'];
                    $subject = new Subject($code);
                    $meaning = $subject->getMeaning();
                    echo "<li>$meaning</li>";
                }

                echo "</ul>";
                echo "<form action=\"$destinationPage\" method=\"post\">";
                echo '<button class="admin_btn">Add Subject</button>';
                echo '</form>';
            } else {
                echo "<p>No subject codes found for this student.</p>";
            }

            echo "</div>";
        } else {
            echo "Student not found.";
        }
    } else {
        echo "No student number provided.";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
</body>

</html>