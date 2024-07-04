<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/addsubject.css">
    <title>Add Subject</title>
    <style>
        .checkbox-container {
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container3">

        <h2>Select Subject(s):</h2>

        <?php
        // Assuming you have a database connection established
        include 'connect.php';
        // Retrieve the course and year for the student from the enrolled_students table
        $studentId = ($_GET['studentnumber']); // Replace with the actual parameter name used in the URL

        $query = "SELECT course, year FROM enrolled_students WHERE studentnumber = $studentId AND schoolyear = 2022";
        $result = mysqli_query($conn, $query);

        // Fetch the course and year for the student
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $course = $row['course'];
            $year = $row['year'];
        } else {
            // Handle the case when the query fails
            die("Error: " . mysqli_error($conn));
        }

        // Prepare and execute the query to retrieve the enrolled courses for the specific student
        $query1 = "SELECT code FROM subject_code WHERE enrolled_students_id IN (SELECT id FROM enrolled_students WHERE studentnumber = '$studentId' AND schoolyear = 2022)";
        $result1 = mysqli_query($conn, $query1);

        // Fetch the enrolled course codes and populate the $enrolledCourses array
        $enrolledCourses = [];
        if ($result1) {
            while ($row = mysqli_fetch_assoc($result1)) {
                $enrolledCourses[] = $row['code'];
            }
        } else {
            // Handle the case when the query fails
            die("Error: " . mysqli_error($conn));
        }
        // Define the course options based on the course and year
        $courseOptions = [];

        if ($course === '1' && $year === '1') {
            $courseOptions = [
                'OOP' => 'Object-Oriented Programming',
                'NS' => 'Networking and Security',
                'UTS' => 'Understanding the Self',
                'FIT2' => 'FITT2',
                'DA' => 'Data Analytics',
                'CS' => 'Cybersecurity',
                'CW' => 'Contemporary World',
                'FIT3' => 'FITT3',
                'BDA' => 'Big Data Analytics',
                'MWS' => 'Mobile and Web Security',
                'SPI' => 'Social and Professional Issues',
                'FIT4' => 'FITT4'
            ];
        } else if ($course === '1' && $year === '2') {
            $courseOptions = [
                'DA' => 'Data Analytics',
                'CS' => 'Cybersecurity',
                'CW' => 'Contemporary World',
                'FIT3' => 'FITT3',
                'BDA' => 'Big Data Analytics',
                'MWS' => 'Mobile and Web Security',
                'SPI' => 'Social and Professional Issues',
                'FIT4' => 'FITT4'
            ];
        } else if ($course === '1' && $year === '3') {
            $courseOptions = [
                'BDA' => 'Big Data Analytics',
                'MWS' => 'Mobile and Web Security',
                'SPI' => 'Social and Professional Issues',
                'FIT4' => 'FITT4'
            ];
        } else if ($course === '1' && $year === '4') {
            $courseOptions = [
                'No option available'
            ];
        } else if ($course === '2' && $year === '1') {
            $courseOptions = [
                'OOP' => 'Object-Oriented Programming',
                'SE' => 'Software Engineering',
                'D' => 'Dalumat',
                'FIT2' => 'FITT2',
                'ADSA' => 'Advanced Data Structures and Algorithms',
                'CG' => 'Computer Graphics',
                'GS' => 'Gender and Society',
                'FIT3' => 'FITT3',
                'CNS' => 'Cryptography and Network Security',
                'SECP' => 'Software Engineering Capstone Project',
                'RW' => 'Rizal Works',
                'FIT4' => 'FITT4'
            ];
        } else if ($course === '2' && $year === '2') {
            $courseOptions = [
                'ADSA' => 'Advanced Data Structures and Algorithms',
                'CG' => 'Computer Graphics',
                'GS' => 'Gender and Society',
                'FIT3' => 'FITT3',
                'CNS' => 'Cryptography and Network Security',
                'SECP' => 'Software Engineering Capstone Project',
                'RW' => 'Rizal Works',
                'FIT4' => 'FITT4'
            ];
        } else if ($course === '2' && $year === '3') {
            $courseOptions = [
                'CNS' => 'Cryptography and Network Security',
                'SECP' => 'Software Engineering Capstone Project',
                'RW' => 'Rizal Works',
                'FIT4' => 'FITT4'
            ];
        } else if ($course === '2' && $year === '4') {
            $courseOptions = [
                'No option available'
            ];
        } else if ($course === '3' && $year === '1') {
            $courseOptions = [
                'DSD' => 'Digital Systems Design',
                'OS' => 'Operating Systems',
                'E' => 'Ethics',
                'FIT2' => 'FITT2',
                'CNP' => 'Computer Networks and Protocols',
                'RA' => 'Robotics and Automation',
                'MS' => 'Multimedia System',
                'FIT3' => 'FITT3',
                'HSC' => 'Hardware/Software Co-design',
                'AR' => 'Advanced Robotics',
                'NM' => 'Network Management',
                'FIT4' => 'FITT4'
            ];
        } else if ($course === '3' && $year === '2') {
            $courseOptions = [
                'CNP' => 'Computer Networks and Protocols',
                'RA' => 'Robotics and Automation',
                'MS' => 'Multimedia System',
                'FIT3' => 'FITT3',
                'HSC' => 'Hardware/Software Co-design',
                'AR' => 'Advanced Robotics',
                'NM' => 'Network Management',
                'FIT4' => 'FITT4'
            ];
        } else if ($course === '3' && $year === '3') {
            $courseOptions = [
                'HSC' => 'Hardware/Software Co-design',
                'AR' => 'Advanced Robotics',
                'NM' => 'Network Management',
                'FIT4' => 'FITT4'
            ];
        } else if ($course === '3' && $year === '4') {
            $courseOptions = [
                'No option available'
            ];
        }
        ?>

        <form action="connect-subject.php" method="post">
            <input type="hidden" name="studentID" value="<?php echo $studentId ?>">
            <?php foreach ($courseOptions as $code => $name) : ?>
                <?php if (in_array($code, $enrolledCourses)) continue; ?>
                <input type="checkbox" name="code[]" value="<?php echo is_array($code) ? implode(", ", $code) : $code; ?>">
                <?php echo implode(", ", (array) $name); ?><br>
            <?php endforeach; ?>

            <input type="submit" value="Submit">
        </form>
    </div>
    </div>
</body>

</html>