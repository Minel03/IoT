<?php
// Establish a database connection
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'iotf';

$mysqli = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $result = $mysqli->query($sql);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $storedPassword = $user['userpassword'];

        if (password_verify($password, $storedPassword)) {
            session_start();
            $_SESSION['username'] = $user['username'];

            header('Location: admin-dashboard.php');
            exit();
        } else {
            echo '<script>alert("Incorrect Password");</script>';
            echo '<script>window.location.href = "index.php";</script>';
        }
    } else {
        echo '<script>alert("Incorrect Username");</script>';
        echo '<script>window.location.href = "index.php";</script>';
    }

    $result->free();
}

$mysqli->close();
