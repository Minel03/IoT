<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/recordpage.css">
    <title>Record Page</title>

    <style>
        .bar {
            margin-top: 25px;
            margin-left: auto;
            margin-right: auto;
            background-color: #66afe9;
            border: 1px solid #ffffff;
            color: #333;
            padding: 10px;
            cursor: pointer;
            width: 50%;
        }

        .result {
            display: none;
            margin-top: 10px;
        }
    </style>
    <script>
        function toggleResult(resultDivId) {
            var resultDiv = document.getElementById(resultDivId);
            resultDiv.style.display = resultDiv.style.display === "none" ? "block" : "none";
        }
    </script>
</head>

<body>
    <h1>Student Records</h1>

    <?php
    // Assuming you have already connected to your database
    include 'connect.php';

    // Check if a search query is provided
    $searchQuery = "";
    if (isset($_GET['search'])) {
        $searchQuery = $_GET['search'];
        // Add the search condition to the query
        $query = "SELECT students.fullname AS student_name, students.id AS student_number, enrolled_students.year AS student_year, enrolled_students.course AS student_course
    FROM students
    INNER JOIN enrolled_students ON students.id = enrolled_students.studentnumber
    WHERE schoolyear = 2022 AND (students.fullname LIKE '%$searchQuery%' OR students.id LIKE '%$searchQuery%')";

        // Check if a course filter is selected
        if (isset($_GET['course']) && $_GET['course'] != "") {
            $courseFilter = $_GET['course'];
            $query .= " AND enrolled_students.course = $courseFilter";
        }

        // Check if a year filter is selected
        if (isset($_GET['year']) && $_GET['year'] != "") {
            $yearFilter = $_GET['year'];
            $query .= " AND enrolled_students.year = $yearFilter";
        }
    } else {
        // Query to fetch all data from the tables
        $query = "SELECT students.fullname AS student_name, students.id AS student_number, enrolled_students.year AS student_year, enrolled_students.course AS student_course
FROM students
INNER JOIN enrolled_students ON students.id = enrolled_students.studentnumber
WHERE schoolyear = 2022
ORDER BY student_year ASC";

        // Check if a course filter is selected
        if (isset($_GET['course']) && $_GET['course'] != "") {
            $courseFilter = $_GET['course'];
            $query .= " AND enrolled_students.course = $courseFilter";
        }

        // Check if a year filter is selected
        if (isset($_GET['year']) && $_GET['year'] != "") {
            $yearFilter = $_GET['year'];
            $query .= " AND enrolled_students.year = $yearFilter";
        }
    }

    $result = mysqli_query($conn, $query);

    ?>

    <form action="recordpage.php" method="get">
        <input type="text" name="search" placeholder="Enter Student Number" value="<?php echo htmlspecialchars($searchQuery); ?>">
        <button type="submit">Search</button>

        <label for="course">Course:</label>
        <select name="course" id="course">
            <option value="">All Course</option>
            <option value="1" <?php if (isset($_GET['course']) && $_GET['course'] == '1') echo 'selected'; ?>>BSIT</option>
            <option value="2" <?php if (isset($_GET['course']) && $_GET['course'] == '2') echo 'selected'; ?>>BSCS</option>
            <option value="3" <?php if (isset($_GET['course']) && $_GET['course'] == '3') echo 'selected'; ?>>BSCE</option>
        </select>

        <label for="year">Year:</label>
        <select name="year" id="year">
            <option value="">All Year Level</option>
            <option value="1" <?php if (isset($_GET['year']) && $_GET['year'] == '1') echo 'selected'; ?>>1</option>
            <option value="2" <?php if (isset($_GET['year']) && $_GET['year'] == '2') echo 'selected'; ?>>2</option>
            <option value="3" <?php if (isset($_GET['year']) && $_GET['year'] == '3') echo 'selected'; ?>>3</option>
            <option value="4" <?php if (isset($_GET['year']) && $_GET['year'] == '4') echo 'selected'; ?>>4</option>
        </select>

        <button type="submit" name="filter-submit">Filter</button>
        <button type="button" onclick="clearFields()">Clear</button>
    </form>

    <div class="bar" onclick="toggleResult('resultDiv2019')">2019-2020</div>

    <div id="resultDiv2019" class="result">
        <!-- Add your query and result display code for 2019-2020 here -->
        <?php
        $query1 = "SELECT students.fullname AS student_name, students.id AS student_number, enrolled_students.year AS student_year, enrolled_students.course AS student_course
        FROM students
        INNER JOIN enrolled_students ON students.id = enrolled_students.studentnumber
        WHERE schoolyear = 2019
        ORDER BY student_year ASC";

        $result1 = mysqli_query($conn, $query1);

        if ($result1 && mysqli_num_rows($result1) > 0) {
            // Display the table headers
            echo "<table>
        <tr><th><h2>Student Name</h2></th><th><h2>Student Number</h2></th><th><h2>Year</h2></th><th><h2>Course</h2></th></tr>";
            // Fetching and displaying the data
            while ($row = mysqli_fetch_assoc($result1)) {
                echo "<tr>
                <td><p>" . $row['student_name'] . "</p></td>
                <td><p>" . $row['student_number'] . "</a></p></td>
                <td><p>" . $row['student_year'] . "</p></td>
                <td><p>";

                // Printing the course based on its value
                if ($row['student_course'] == 1) {
                    echo "BSIT";
                } elseif ($row['student_course'] == 2) {
                    echo "BSCS";
                } elseif ($row['student_course'] == 3) {
                    echo "BSCE";
                }

                echo "</p></td></tr>";
            }

            // Close the table
            echo "</tbody>
    </table>";
        } else {
            // Display a message if no results are found
            echo "No records found.";
        }
        ?>
    </div>

    <div class="bar" onclick="toggleResult('resultDiv2020')">2020-2021</div>

    <div id="resultDiv2020" class="result">
        <!-- Add your query and result display code for 2020-2021 here -->
        <?php
        $query1 = "SELECT students.fullname AS student_name, students.id AS student_number, enrolled_students.year AS student_year, enrolled_students.course AS student_course
        FROM students
        INNER JOIN enrolled_students ON students.id = enrolled_students.studentnumber
        WHERE schoolyear = 2020
        ORDER BY student_year ASC";

        $result2 = mysqli_query($conn, $query1);

        if ($result2 && mysqli_num_rows($result2) > 0) {
            // Display the table headers

            echo "<table>
        <tr><th><h2>Student Name</h2></th><th><h2>Student Number</h2></th><th><h2>Year</h2></th><th><h2>Course</h2></th></tr>";
            // Fetching and displaying the data
            while ($row = mysqli_fetch_assoc($result2)) {
                echo '<div class="enrollment-table">';
                echo "<tr>
                <td><p>" . $row['student_name'] . "</p></td>
                <td><p>" . $row['student_number'] . "</a></p></td>
                <td><p>" . $row['student_year'] . "</p></td>
                <td><p>";

                // Printing the course based on its value
                if ($row['student_course'] == 1) {
                    echo "BSIT";
                } elseif ($row['student_course'] == 2) {
                    echo "BSCS";
                } elseif ($row['student_course'] == 3) {
                    echo "BSCE";
                }

                echo "</p></td></tr>";
            }

            // Close the table
            echo "</tbody>
            echo '</div>';
    </table>";
        } else {
            // Display a message if no results are found
            echo "No records found.";
        }
        ?>
    </div>

    <div class="bar" onclick="toggleResult('resultDiv2021')">2021-2022</div>

    <div id="resultDiv2021" class="result">
        <!-- Add your query and result display code for 2021-2022 here -->
        <?php
        $query1 = "SELECT students.fullname AS student_name, students.id AS student_number, enrolled_students.year AS student_year, enrolled_students.course AS student_course
        FROM students
        INNER JOIN enrolled_students ON students.id = enrolled_students.studentnumber
        WHERE schoolyear = 2021
        ORDER BY student_year ASC";

        $result3 = mysqli_query($conn, $query1);

        if ($result3 && mysqli_num_rows($result3) > 0) {
            // Display the table headers
            echo "<table>
        <tr><th><h2>Student Name</h2></th><th><h2>Student Number</h2></th><th><h2>Year</h2></th><th><h2>Course</h2></th></tr>";
            // Fetching and displaying the data
            while ($row = mysqli_fetch_assoc($result3)) {
                echo "<tr>
                <td><p>" . $row['student_name'] . "</p></td>
                <td><p>" . $row['student_number'] . "</a></p></td>
                <td><p>" . $row['student_year'] . "</p></td>
                <td><p>";

                // Printing the course based on its value
                if ($row['student_course'] == 1) {
                    echo "BSIT";
                } elseif ($row['student_course'] == 2) {
                    echo "BSCS";
                } elseif ($row['student_course'] == 3) {
                    echo "BSCE";
                }

                echo "</p></td></tr>";
            }

            // Close the table
            echo "</tbody>
    </table>";
        } else {
            // Display a message if no results are found
            echo "No records found.";
        }
        ?>
    </div>

    <div class="bar" onclick="toggleResult('resultDiv')">2022-2023</div>

    <div id="resultDiv" class="result">
        <?php
        // Checking if the query was successful
        if ($result && mysqli_num_rows($result) > 0) {
            // Display the table headers
            echo "<table>
    <tr>
        <th><h2>Student Name</h2></th>
        <th><h2>Student Number</h2></th>
        <th><h2>Year</h2></th>
        <th><h2>Course</h2></th>
        <th></th>
    </tr>";

            // Fetching and displaying the data
            while ($row = mysqli_fetch_assoc($result)) {
                $destinationPage = 'regform.php?studentnumber=' . urlencode($row['student_number']);
                $destinationPage2 = 'drop.php?studentnumber=' . urlencode($row['student_number']);
                echo "<tr>
        <td><p>" . $row['student_name'] . "</p></td>
        <td><p><a href='" . $destinationPage . "'>" . $row['student_number'] . "</a></p></td>
        <td><p>" . $row['student_year'] . "</p></td>
        <td><p>";

                // Printing the course based on its value
                if ($row['student_course'] == 1) {
                    echo "BSIT";
                } elseif ($row['student_course'] == 2) {
                    echo "BSCS";
                } elseif ($row['student_course'] == 3) {
                    echo "BSCE";
                }

                echo "</p></td>";

                // Add the button here
                echo "<td>
        <form action='" . $destinationPage2 . "' method='post'>
            <button class='admin_btn'>Drop</button>
        </form>
    </td>";

                echo "</tr>";
            }

            // Close the table
            echo "</tbody>
    </table>";
        } else {
            // Display a message if no results are found
            echo "No records found.";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </div>

    <form action="admin-dashboard.php" method="post">
        <button class="admin_btn">Back</button>
    </form>
</body>

</html>